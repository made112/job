<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobType;
use App\Models\Request_job;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest ;

class JobController extends Controller
{
    public function create()
    {
        $jop = JobType::get();

        return view('admin.job.add_Job',compact('jop'));
    }

    public function store(Request $request)
    {
//            dd($request);
$path = $request->file('video')->store('/imagesite', ['disk' => 'uploads']);

//        try {
            Job::create($request->except(['_token','video',$path]));


            return redirect()->route('jop')->with(['success' => 'تم الحفظ بنجاح']);

//        } catch (\Exception $ex) {

//        }
        return redirect()->route('jop')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);


    }

    public function index()
    {
        $jobs = Job::paginate(6);
        return view('admin.job.index', compact('jobs'));


    }

    public function indexRquest()
    {
        $jobs = Request_job::paginate(6);
        return view('admin.job_request.index', compact('jobs'));


    }
    public function edit($id)
    {
        $Jobs = Job::find($id);

        if (!$Jobs)
            return redirect()->route('admin.job')->with(['error' => 'هذا القسم غير موجود ']);

        return view('admin.job.edit', compact('Jobs'));

    }
    public function update($id, JobRequest $request)
    {

        try {
            $Jobs = Job::find($id);
            if (!$Jobs) {
                return redirect()->route('admin.job', $id)->with(['error' => 'هذه الزظيفة غير موجوده']);
            }
            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $Jobs->update($request->except('_token'));

            return redirect()->route('jop')->with(['success' => 'تم تحديث الوظيفة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.job')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function destroy($id){
        try {
            $Jobs = Job::find($id);
            if (!$Jobs) {
                return redirect()->route('admin.job', $id)->with(['error' => 'هذه الوظيفة غير موجوده']);
            }
            $Jobs->delete();

            return redirect()->route('admin.job')->with(['error' => 'تم حذف الوظيفة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.job')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function deleteRquest($id){
//        try {
            $Jobs = Request_job::find($id);
            if (!$Jobs) {
                return redirect()->route('admin.job_request', $id)->with(['error' => 'هذه الوظيفة غير موجوده']);
            }
            $Jobs->delete();

            return redirect()->route('admin.job_request')->with(['error' => 'تم حذف الوظيفة بنجاح']);

//        } catch (\Exception $ex) {
            return redirect()->route('admin.job')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
//        }
    }

    public function downloadFile(Request $request)
    {

        return response()->download($request->get('path'), 'image.pdf');
    }
}

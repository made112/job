<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobType;
use App\Models\Request_job;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest ;

class CompanyController extends Controller
{
    public function create()
    {
//        dd('ss');
        $jop = JobType::get();

        return view('company.company.create',compact('jop'));
    }

    public function store(Request $request)
    {
//            dd($request);

//        try {

            Company::create($request->all());


            return redirect()->route('company.index')->with(['success' => 'تم الحفظ بنجاح']);

//        } catch (\Exception $ex) {

//        }


    }


    public function suggest(Request $request)
    {
            dd($request);

//        try {
        $user = new User();

        $user->
        Company::create($request->except(['_token','video',$path]));


        return redirect()->route('jop')->with(['success' => 'تم الحفظ بنجاح']);

//        } catch (\Exception $ex) {

//        }
        return redirect()->route('company.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);


    }

    public function index()
    {
        $jobs = Company::where('active',1)->paginate(6);
        return view('company.company.index', compact('jobs'));


    }

    public function indexRquest()
    {
        $jobs = Request_job::paginate(6);
        return view('admin.job_request.index', compact('jobs'));


    }
    public function edit($id)
    {
        $Jobs = Company::find($id);

        if (!$Jobs)
            return redirect()->route('company.index')->with(['error' => 'هذا القسم غير موجود ']);

        return view('company.edit', compact('Jobs'));

    }
    public function update($id, JobRequest $request)
    {

        try {
            $Jobs = Job::find($id);
            if (!$Jobs) {
                return redirect()->route('admin.company', $id)->with(['error' => 'هذه الزظيفة غير موجوده']);
            }
            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $Jobs->update($request->except('_token'));

            return redirect()->route('jop')->with(['success' => 'تم تحديث الوظيفة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.company')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function destroy($id){
        try {
            $Jobs = Company::find($id);
            if (!$Jobs) {
                return redirect()->route('company.index', $id)->with(['error' => 'هذه الشركة غير موجوده']);
            }
            $Jobs->delete();

            return redirect()->route('company.index')->with(['error' => 'تم حذف الوظيفة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('company.index')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
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
            return redirect()->route('admin.company')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
//        }
    }

    public function downloadFile(Request $request)
    {

        return response()->download($request->get('path'), 'image.pdf');
    }
}

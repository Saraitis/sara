<?php
class="ezoic-autoinsert-ad ezoic-under_second_paragraph">namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudUpdateController extends Controller {
public function index(){
$users = DB::select('select * from student');
return view('stud_edit_view',['users'=>$users]);
}
public function show($id) {
$users = DB::select('select * from student where id = ?',[$id]);
return view('stud_update',['users'=>$users]);
class="ezoic-autoinsert-ad ezoic-mid_content">"clear:both;display:block" id="ez-clearholder-box-4">class="ezoic-ad ezoic-at-0 box-4 box-4260 adtester-container adtester-container-260 ezads-sticky-intradiv" data-ez-name="studentstutorial_com-box-4">"div-gpt-ad-studentstutorial_com-box-4-0" ezaw="300" ezah="250" style="position:relative;z-index:0;display:inline-block;padding:0;position:sticky;top:0;min-height:250px;min-width:300px" class="ezoic-ad">}
public function edit(Request $request,$id) {
$first_name = $request->input('first_name');
$last_name = $request->input('last_name');
$city_name = $request->input('city_name');
$email = $request->input('email');
/*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
/*DB::table('student')->update($data);*/
/* DB::table('student')->whereIn('id', $id)->update($request->all());*/
DB::update('update student set first_name = ?,last_name=?,city_name=?,email=? where id = ?',[$first_name,$last_name,$city_name,$email,$id]);
echo "Record updated successfully.
";
class="ezoic-autoinsert-ad ezoic-long_content">"clear:both;display:block" id="ez-clearholder-banner-1">class="ezoic-ad ezoic-at-0 banner-1 banner-1360 adtester-container adtester-container-360 ezads-sticky-intradiv" data-ez-name="studentstutorial_com-banner-1">"div-gpt-ad-studentstutorial_com-banner-1-0" ezaw="970" ezah="90" style="position:relative;z-index:0;display:inline-block;padding:0;position:sticky;top:0;width:100%;max-width:1200px;margin-left:auto!important;margin-right:auto!important;min-height:250px;min-width:970px" class="ezoic-ad">echo 'Click Here to go back.';
}
}
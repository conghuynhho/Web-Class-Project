<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class ContactController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id)
        {
            return Redirect::to('dashboard');
        }
        else
        {
            return Redirect::to('admin')->send();
        }
    }
    public function add_contact(){
    	return view('page.lienhe');
    }
    public function list_contact(){
        $this->AuthLogin();
    	$list_contact = DB::table('contact')->get();
    	$manager_contact = view('admin.list_contact')->with('list_contact',$list_contact);
    	return view('admin_layout')->with('admin.list_contact',$manager_contact);
    }
    public function post_add_contact(Request $Request)
    {
    	$data = array();
    	$data['name'] = $Request->note_name;
    	$data['email'] = $Request->note_email;
    	$data['number'] = $Request->note_number;
    	$data['note'] = $Request->note_text;
    	DB::table('contact')->insert($data);
    	session::put('message','Thêm phản hồi thành công');
    	return Redirect::to('lienhe');
    }
    public function unhandle($id)
    {
        $this->AuthLogin();
    	DB::table('contact')->where('id',$id)->update(['status'=>0]);
    	Session::put('message','Chưa xử lí');
    	return Redirect::to('list-contact');
    }
    public function handle($id)
    {
        $this->AuthLogin();
    	DB::table('contact')->where('id',$id)->update(['status'=>1]);
    	Session::put('message','Xử lí phản hồi thành công');
    	return Redirect::to('list-contact');
    }
    public function delete_contact($id)
    {
        $this->AuthLogin();
    	DB::table('contact')->where('id',$id)->delete();
    	session::put('message','Xóa phản hồi thành công');
    	return Redirect::to('list-contact');
    }
}

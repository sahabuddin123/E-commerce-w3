<?php
 
namespace App\Http\Controllers\Admin;
 
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
 
class SettingController extends BaseController{
/**
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
*/
    public function index(){
        $this->setPageTitle('Settings', 'Manage Settings');
            return view('admin.settings.index');
        }
}
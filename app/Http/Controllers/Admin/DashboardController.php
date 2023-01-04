<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->ViewData  = [];
    $this->JsonData  = [];
    $this->ModuleTitle  = __('admin.TITLE_DASHBOARD');
    $this->ModuleView   = 'admin.dashboard.';
    $this->ModulePath   = 'admin.dashboard';
  }
   public function index()
   {
      $this->ModuleTitle  = __('admin.TITLE_DASHBOARD');
      $this->ViewData['moduleTitle']  = $this->ModuleTitle;
      $this->ViewData['moduleAction'] = $this->ModuleTitle;
      $this->ViewData['modulePath']   = $this->ModulePath;
      return view($this->ModuleView.'index', $this->ViewData);
   }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aboutme;
use App\Advs;
use App\Cat;
use App\Contact;
use App\News;
use App\Projects;
use App\Saying;
use App\User;
use App\Skill;
class IndexController extends Controller
{
	public function __construct(Aboutme $maboutme,Advs $madvs,Cat $mcat,Contact $mcontact,News $mnews,Projects $mprojects,Saying $msaying,User $muser,Skill $mskill){
		$this->maboutme = $maboutme;
		$this->madvs = $madvs;
		$this->mcat = $mcat;
		$this->mcontact = $mcontact;
		$this->mnews = $mnews;
		$this->mprojects = $mprojects;
		$this->msaying = $msaying;
		$this->muser = $muser;
        $this->mskill = $mskill;
	}
    public function index() {
    	$countAboutme = $this->maboutme->getCountAboutme();
    	$countAdvs = $this->madvs->getCountAdvs();
    	$countCat = $this->mcat->getCountCat();
    	$countContact = $this->mcontact->getCountContact();
    	$countNews = $this->mnews->getCountNews();
    	$countProjects = $this->mprojects->getCountProjects();
    	$countSaying = $this->msaying->getCountSaying();
    	$countUser = $this->muser->getCountUser();
        $countSkill = $this->mskill->getCountSkill();
    	return view('admin.index.index', compact('countAboutme','countAdvs','countCat','countContact','countNews','countProjects','countSaying','countUser','countSkill'));
    }
}

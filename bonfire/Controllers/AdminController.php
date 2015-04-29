<?php namespace Bonfire\Controllers;

use Myth\Auth\AuthTrait;
use Myth\Controllers\ThemedController;

define('IN_ADMIN', true);

class AdminController extends ThemedController {

    use AuthTrait;

    /**
     * Which theme to use for admin area.
     *
     * @var string
     */
    protected $theme = 'admin';

    //--------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();

        $this->restrictToGroups('admin');
    }

    //--------------------------------------------------------------------


}
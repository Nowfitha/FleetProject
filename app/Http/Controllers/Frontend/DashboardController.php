<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tobuli\Helpers\Dashboard\DashboardManager;

class DashboardController extends Controller
{
    /**
     * @var DashboardManager
     */
    private $dashboardManager;

    public function __construct(DashboardManager $dashboardManager)
    {
        parent::__construct();

        $this->dashboardManager = $dashboardManager;
    }

    public function index(Request $request)
    {
        $blocks = [];

        $settings = $this->user->getSettings('dashboard');

        foreach ($settings['blocks'] as $block => $config) {
            if ( ! $this->dashboardManager->getConfig($block, 'enabled'))
                continue;

            $blocks[$block] = $this->dashboardManager->getFrame($block);
        }

        if ($request->ajax())
            return view('front::Dashboard.modal', ['blocks' => $blocks]);

        return view('front::Dashboard.index', ['blocks' => $blocks]);
    }

    public function blockContent()
    {
        $content = $this->dashboardManager->getContent(request('name'));

        if (is_null($content))
            return ['status' => 0];

        return response()->json(['status' => 1, 'html' => $content]);
    }

    public function updateConfig()
    {
        $config = request('dashboard');

        $this->user->setSettings('dashboard', $config, true);

        return response()->json(['status' => 1]);
    }
}

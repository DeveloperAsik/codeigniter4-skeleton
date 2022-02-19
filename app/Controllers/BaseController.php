<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller {

    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['html'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger) {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        // E.g.: $this->session = \Config\Services::session();

        $session = \Config\Services::session();
        $this->initConfiguration($request, $session);
    }

    public function renderLayout($layout, $data) {
        //$parser = \Config\Services::parser();
        //$parser->setData($data)->render($layout);
        $data['template_configs'] = $this->InitTemplateConfigs();
        return view('Public_html/'.$layout, $data, ['saveData' => true]);
    }

    protected function initConfiguration($request, $session) {
        //$this->lang();
        //if ($session->get('_lang') && !empty($session->get('_lang'))) {
        //    $this->load->vars('_lang', strtolower($session->get('_lang')));
        //}
    }

    protected function InitTemplateConfigs() {
        $router = service('router');
        $controller = $router->controllerName();
        $controller_name = $this->fnGetControllerDetail($controller, ['is_class_name' => true]);
        $controller_path = $this->fnGetControllerDetail($controller, ['is_class_view_path' => true]);
        $method = $router->methodName();
        $arr = array(
            '_class' => $controller_name,
            '_action' => $method,
            '_view_html' => 'Public_html/Pages/' . $controller_path . '/' . $controller_name . '/' . $method . '.html.php',
            '_view_js' => 'Public_html/Pages/' . $controller_path . '/' . $controller_name . '/' . $method . '.js.php',
            '_global_js' => 'Public_html/Helpers/global.js.php',
            '_base_url' => base_url()
        );
        $this->template_configs = new \stdClass();
        if (isset($arr) && !empty($arr)) {
            foreach ($arr AS $key => $val) {
                $this->template_configs->{$key} = $val;
            }
        }
        return $arr;
    }

    protected function fnGetControllerDetail($controller, $param) {
        if (isset($param['is_class_name']) && $param['is_class_name'] == true) {
            $cname = explode('\\', $controller);
            $cnameTotal = count($cname);
            $className = $cname[$cnameTotal - 1];
            return $className;
        } elseif (isset($param['is_class_view_path']) && $param['is_class_view_path'] == true) {
            $cname = explode('\\', $controller);
            $cnameTotal = count($cname);
            unset($cname[$cnameTotal - 1]);
            $cnameTotalPath = count($cname);
            return $cname[$cnameTotalPath - 1];
        }
    }

}

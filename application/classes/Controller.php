<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Custom abstract Controller class to add functionality to the Core Kohana_Controller.
 * 
 * @author Agustin Vijoditz <vijo.agus@gmail.com>
 * @on May 29th, 2014
 * @package BlogDemoKohana
 * @license http://www.gnu.org/copyleft/gpl.html    GPL v3
 */
abstract class Controller extends Kohana_Controller
{
    /**
     * Outputs sent array as a JSON string and sends "Content-Type:application/json" headers
     * 
     * @param array $data
     * @output JSON response
     */
    protected function output_json($data)
    {
        $this->response->headers('Content-Type','application/json');
        $this->response->body(json_encode($data));
    }
  }

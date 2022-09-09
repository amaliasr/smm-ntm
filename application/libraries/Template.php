<?php
class Template
{
    protected $_ci;

    function __construct()
    {
        $this->_ci = &get_instance();
    }

    function views($template = NULL, $data = NULL, $is_auth = NULL)
    {
        if ($template != NULL) {
            //META TAG
            $data['env'] = $this->_ci->load->view('templates/env', $data, TRUE);

            //META TAG
            $data['meta_tag'] = $this->_ci->load->view('templates/meta_tag', $data, TRUE);

            //CSS
            $data['css'] = $this->_ci->load->view('templates/css', $data, TRUE);

            //CSS
            $data['js_top'] = $this->_ci->load->view('templates/js_top', $data, TRUE);

            //TITLE
            $data['title'] = $this->_ci->load->view('templates/title', $data, TRUE);

            //NAVBAR
            $data['navbar'] = $this->_ci->load->view('templates/navbar', $data, TRUE);

            //sidenav
            $data['sidenav'] = $this->_ci->load->view('templates/sidenav', $data, TRUE);

            //CONTENT
            $data['content'] = $this->_ci->load->view($template, $data, TRUE);

            //FOOTER
            $data['footer'] = $this->_ci->load->view('templates/footer', $data, TRUE);

            //JS
            $data['js'] = $this->_ci->load->view('templates/js', $data, TRUE);

            //RESULT
            if ($is_auth == NULL) {
                $data['combined'] = $this->_ci->load->view('templates/combined', $data, TRUE);
            } else {
                $data['combined'] = $this->_ci->load->view('templates/auth', $data, TRUE);
            }

            echo $data['combined'];
        }
    }
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends Public_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->path = $this->config->item('uploads');
        $this->load->model(admin('categories_model'));
        $this->load->model(admin('blogs_model'));
        
        $this->categories = $this->categories_model->getAllCategory();
    }
    
    public function index($slug = null)
    {
        $this->load->library('pagination');

        if($slug) {
            $where['sc.page_name'] = $slug;
        } else {
            $where = [
                'blog_type' => $this->uri->segment(1) === 'blogs' ? 'Blog' : 'Portfolio',
            ];
        }

        $config = [
            'base_url'           => current_url(),
            'total_rows'         => count($this->blogs_model->getAllBlogs($where)),
            'per_page'           => 6,
            'page_query_string'  => TRUE,
            'reuse_query_string' => TRUE,
            'use_page_numbers'   => TRUE,
            'full_tag_open'      => '<ul class="pagination">',
            'full_tag_close'     => '<ul>',
            'first_link'         => '&lt&lt',
            'first_tag_open'     => '<li class="page-item">',
            'first_tag_close'    => '</li>',
            'last_link'          => '&gt&gt',
            'last_tag_open'      => '<li class="page-item">',
            'last_tag_close'     => '</li>',
            'next_link'          => '&gt',
            'next_tag_open'      => '<li class="page-item">',
            'next_tag_close'     => '</li>',
            'prev_link'          => '&lt',
            'prev_tag_open'      => '<li class="page-item">',
            'prev_tag_close'     => '</li>',
            'cur_tag_open'       => '<li class="page-item active"><a href="javascript:;" class="page-link">',
            'cur_tag_close'      => '</a></li>',
            'num_tag_open'       => '<li class="page-item">',
            'num_tag_close'      => '</li>',
            'attributes'         => ['class' => 'page-link page-links']
        ];

        $this->pagination->initialize($config);

        $page_number = $this->input->get('per_page') ? $this->input->get('per_page') : 1;

        $offset = ($page_number - 1) * $config['per_page'];

        $data['blogs'] = $this->blogs_model->getAllBlogs($where, $config['per_page'], $offset);
        if(!$this->input->is_ajax_request()) {
            $data['breadcumb'] = 'Blogs';
            return $this->template->load('template', 'blogs/list', $data);
        } else {
            responseMsg($data['blogs'], "Thank You for subscribing!", "Subscription not saved. Try again.");
        }
    }

    public function category_blog($slug)
    {
        $blog = $this->blogs_model->getBlog(['s.page_name' => $slug]);

        if($blog) {
            $data['blog'] = $blog;
            $data['breadcumb'] = 'Blog Details';
            $data['category'] = array_filter($this->categories, function($category) use ($blog) {
                $category_id = !empty($blog['category_id']) ? explode(',', $blog['category_id']) : [];
                return in_array($category['id'], $category_id);
            });

            return $this->template->load('template', 'blogs/blog', $data);
        }

        $check = false;

        if(!empty($this->categories)) {
            $check = array_filter($this->categories, function($category) use ($slug) {
                return $category['page_name'] === $slug;
            });
        }

        if(!$check) {
            return $this->error_404();
        } else 
            return $this->index($slug);
    }
}
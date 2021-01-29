<?php
class Board_model extends CI_Model{
    function __construct (){ // initialize
        parent::__construct();
        // $client = \Config\Services::curlrequest();
        // $this->db->transStrict(true);
        $this->load->library('curl');
        // $this->load->database();
    }

    //create

    //read
    public function get(){
        // $this->db->get_where('board',array('id'=>아이디))->row(); active recode;

        return $this->db->query('SELECT * FROM BOARD b ORDER BY b.id ASC')->result();

    }

    public function post($data){
        try {
            /* 트랜잭션 시작 */
            // $this->db->transStart();
            // $this->db->table('board')
            // ->insert([
            //         'title'    => $data->title,
            //         'content'   => $data->content,
            //         'regdate' => date("Y-m-d")
            // ]);
            // $this->db->transComplete();
            // var_dump($data);
            /* 트랜잭션 끝 */
            $this->db->insert('board', $data);
        } catch (\Throwable $err) {
            throw new Error($err);
        }finally{
            // alert('게시물이 생성되었습니다.');
            // redirect('/');
        }
    }
    //update
    //delete
}
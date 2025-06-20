<?php namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content'];

    protected $db;
    protected $builder;

    public function __construct()
    {
        parent::__construct();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table($this->table);
    }

    /**
     * Ambil semua post
     */
	 
	 public function getAll()
	{
		return $this->builder->orderBy('id', 'DESC')->get()->getResultArray();
	}
	/**
    public function getAll()
    {
        // Query mentah tanpa binding parameter: rentan SQL Injection
        $query = $this->db->query("SELECT * FROM posts ORDER BY id DESC");
        return $query->getResultArray();
    }
	**/
	
	
    /**
     * Ambil satu post berdasarkan ID
     */
	public function getById($id)
	{
		return $this->builder->where('id', $id)->get()->getRowArray();
	}

    /**
     * Simpan post baru
     */
	public function insertPost($data)
	{
		return $this->builder->insert($data);
	}

    /**
     * Update post
     */
	public function updatePost($id, $data)
	{
		return $this->builder->where('id', $id)->update($data);
	}


    /**
     * Hapus post
     */
    public function deletePost($id)
    {
        // Sekali lagi: raw query langsung
        $sql = "DELETE FROM posts WHERE id = '$id'";
        return $this->db->query($sql);
    }
}

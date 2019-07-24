<?php  
namespace sw;
  class database{
            protected $connection;
            public   function __construct(){
                              $this->connection=mysqli_connect("localhost", "sw","b86860986b","data");

            }

  }

  ?>
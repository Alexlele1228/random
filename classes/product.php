<?php
   namespace sw;
   class product extends database {
                    public function __construct(){
                                 parent::__construct();
                    }
                    
                    public function getProduct(){
                        $query="SELECT 
                        product.product_id, 
                        product.name, 
                        product.description,
                        product.price,
                        image.image_file_name AS image
                        FROM `product` 
                        INNER JOIN product_image ON product.product_id = product_image.product_id 
                        INNER JOIN image ON  product.product_id = product_image.product_id=image.image.id";

                        $statement=$this->connection->prepare($query);
                        if($statement->execute()){
                            $result=$statement->get_result();
                            $productArr=array();
                            while($row->result->fetch_assoc()){
                            array_push($productArr, $row);
                        }
                        
                        return $productArr;
                    }
                
   }
?>
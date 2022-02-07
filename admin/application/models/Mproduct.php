<?php
class Mproduct extends MY_Model{
    protected static $table	='tbl_product';
	protected static $pid	='sku';	
    
    public function getDataTable(){
      $sTable       = self::$table;
	  $sIndexColumn = 'sku';
	
        
        $columns = array(
                    	array( 'db' => 'id', 'dt' => 0, 'suffix' =>'t',
                               'formatter' => function( $d, $row ) {
                    		
                                return '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input name="id[]" type="checkbox" class="checkboxes" value="'.$d.'"/><span></span></label>';
                    		  }),
                        array( 'db' => 'post_image_thumbs',  'dt' => 1, 'suffix' =>'x' ,'formatter' => function( $d, $row ) {
                    		    $srcImage = base_url("assets/themes/default/no_image.png");
                                if (!empty($row["post_image_thumbs"])){
                                    if (file_exists("../" . $row["post_image_thumbs"])){
                                       $srcImage = ROOT.$row["post_image_thumbs"];
                                    }
                                }
                    		    $data = '<img src="'.$srcImage.'" height="80" />';
                                
                                return $data;
                    		  }),
                    	array( 'db' => 'post_title',  'dt' => 2, 'suffix' =>'x' ,'formatter' => function( $d, $row ) {
                    	    
                                $small = $row["category_name"] ; /// $row["sku"] ." ". $ge ." ". $row["category_name"] . " ". $row["sub_category_name"];
                                $slug = $row["category_slug"] ;
                                $category_name = explode(";",$small);
                                $category_slug = explode(";",$slug);      
                                
                                $category = array();
                                for($i=0; $i < count($category_name); $i++){
                                    //$category[]= '<a href="'.site_url('post/view/'.$category_slug[$i]).'">'.$category_name[$i].'</a>';
                                    $category[]= $category_name[$i];
                                }
                                $category_desc = implode(",",$category);
                              
                                return $d . "<small class='help-block'>" . ' [ '. $category_desc .' ]'.'</small>';
                    		  }),                
                    	array( 'db' => 'price',   'dt' => 3, 'suffix' =>'t',
                                'formatter' => function( $d, $row ) {
                    			//return $d;
                                $discount = number_format($row['discount_price']);
                                $price = number_format($d);
                                if ($discount > 0){
                                    
                                    $afterDiskon = $d - $row['discount_price'];
                                    $afterDiskon = number_format($afterDiskon);
                                    $price = "<strike>$price</strike><br/>".$afterDiskon;
                                }
                                
                                return $price;
                    		  } ),
                        array('db'=>'post_status', 'dt'=>4,  'suffix' =>'x',
                             'formatter' => function( $d, $row ){
                                    
                                    $status = '<span class="label label-warning"> Unpublish </span>';
                                    if ( $d ==1 ){
                                        $status = '<span class="label label-primary"> Publish </span>';
                                    }
                                    
                                    return $status;
                             })
                    );
        $Joinquery = "SELECT t.id,t.price,t.sku, x.post_title,x.post_image_thumbs,x.post_created_date,x.post_status,category.category_name,";
        $Joinquery.= "category.category_slug,(SELECT discount_price FROM tbl_product_discount WHERE product_id = t.id ORDER BY id DESC LIMIT 1 ) AS discount_price "; 
        $Joinquery.= "FROM tbl_product t ";
        $Joinquery.= "LEFT JOIN tbl_post x ON x.id = t.post_id ";
        $Joinquery.= "LEFT JOIN tbl_category c ON c.id = t.category_id ";
        $Joinquery.= "LEFT JOIN (SELECT pc.product_id, GROUP_CONCAT(c.category_name ORDER BY c.id ASC SEPARATOR ';') as category_name,  GROUP_CONCAT(c.slug ORDER BY c.id ASC SEPARATOR ';') as category_slug FROM tbl_product_category pc LEFT JOIN tbl_category c ON c.id = pc.category_id GROUP BY pc.product_id) as category ON category.product_id = t.id";
       
        $result = $this->simple($_GET,$sTable,$sIndexColumn,$columns,$Joinquery);
        echo json_encode($result);   
		
    }
    
}

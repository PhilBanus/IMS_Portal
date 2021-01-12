<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class IMS extends Model
{
    use HasFactory;
	
	public function Children($parent){
		if(DB::table('Category')->where('Parent_Category_ID',$parent)->exists()){
			
			echo $this->displayChildren($parent);
			
		}
			else {
				echo '<table class="table table-sm table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>First</th>
      <th>Last</th>
      <th class="text-right">Age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td>John</td>
      <td>Doe</td>
      <td class="text-right">25</td>
    </tr>
    <tr>
      <th>2</th>
      <td>Jane</td>
      <td>Violet</td>
      <td class="text-right">27</td>
    </tr>
    <tr>
      <th>3</th>
      <td>Jack</td>
      <td>Gates</td>
      <td class="text-right">33</td>
    </tr>
  </tbody>
</table>';
			}
			
			
			
			
		
		
	}

	
	public function displayChildren($parent)
	{
		
		$pools = DB::table('Category')->where('Parent_Category_ID',$parent)
			->leftJoin('UKHT_IMS_Pools','Category.Category_ID','UKHT_IMS_Pools.Pool_ID')
			->orderby('Pool_Order','asc')
			->get();
		
		$links = DB::table('UKHT_IMS_Links')->where('Parent_ID',$parent)->get();
		
		foreach($links as $link){
			echo '<a href="'.$link->Link.'" class="btn btn-block text-left" type="button">';
			echo $link->Icon ? $link->Icon : '<span class="icon-HUK-Icon mr-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>';
			echo $link->Text.'</a>';
		}
		
		foreach($pools as $pool){
		echo '<div class="d-flex w-full justify-content-center my-5"><details class="collapse-panel w-full "><summary class="collapse-header py-5">';
			echo $pool->Icon ? $pool->Icon : '<span class="icon-HUK-Icon mr-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>';
			echo $pool->Name.'</summary><div class="collapse-content p-10 pt-5 "><p>'.$pool->Description.'</p>';
			echo $this->Children($pool->Category_ID);
			echo '</div></details></div>	';
		}
		
		
	}
	
	public function View2Children($parent){
		if(DB::table('Category')->where('Parent_Category_ID',$parent)->exists()){
			
			echo $this->View2displayChildren($parent);
			
		}
			else {
				echo 'end';
			}
			
			
			
			
		
		
	}
	
	public function View2displayChildren($parent)
	{
		
		$pools = DB::table('Category')->where('Parent_Category_ID',$parent)
			->leftJoin('UKHT_IMS_Pools','Category.Category_ID','UKHT_IMS_Pools.Pool_ID')
			->orderby('Pool_Order','asc')
			->get();
		foreach($pools as $pool){
			
			
			
		echo '<p><a href="#modal_'.$pool->Category_ID.'" class="btn btn-primary w-full" role="button">'.$pool->Name.'</a></p>';	
			
		echo '<div class="modal" id="modal_'.$pool->Category_ID.'" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <a href="#" class="close" role="button" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </a>
      <h5 class="modal-title">'.$pool->Name.'</h5>
      <p>';
     
			echo $this->View2Children($pool->Category_ID);
			echo '</p>
      <div class="text-right mt-20"> <!-- text-right = text-align: right, mt-20 = margin-top: 2rem (20px) -->
        <a href="#" class="btn mr-5" role="button">Close</a>
        <a href="#" class="btn btn-primary" role="button">I understand</a>
      </div>
    </div>
  </div>
</div>';
		}
		
		
	}
	public static function getChildren($parent){
		
		
		$pools = DB::table('Category')->where('Parent_Category_ID',$parent)
			->leftJoin('UKHT_IMS_Pools','Category.Category_ID','UKHT_IMS_Pools.Pool_ID')
			->get();
		
		
		return $pools;
	}
}

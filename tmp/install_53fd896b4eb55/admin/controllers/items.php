<?php
/**
* @subpackage	Backend
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/

if(defined('_JEXEC')===false) die();

class VALogsAdminControllerArticle extends VALogsController
{
	public function _save($data, $itemId, $type)
	{
		$count 			= 1;
		$uploadedCount  = 0;
		$path			= VALOGS_PATH_CORE_MEDIA."/images/article/";
		
		foreach($_FILES['valogs_form']["tmp_name"] as $key => $tmpName)
		{
			if(empty($tmpName))
			{
				if($itemId != 0 )
				{
					$voucher = VALogsVoucher::getInstance($itemId);
					$fncn	 = 'getImage'.$count;
					$data[$key]  = $voucher->$fncn();	
				}
				
				$count = $count + 1;
				continue;
			}
			
			$newImageName 		= date("d_m_Y_").time()."_$count".'.png';
			$imageTempName['image'.$count] = $tmpName;
			
			// Check for mime types of image
			$typeofImage 	= mime_content_type($tmpName);
			$tmp			= explode("/", $typeofImage);
			if(strtolower($tmp[0]) == 'image')
			{
				if(!file_exists($path.$newImageName))
				{
					$name		= $imageTempName['image'.$count];
					$uploaded 	= move_uploaded_file($name, "$path"."$newImageName");
					$data['image'.$count] = ($uploaded) ? $newImageName : 'global.png';
					$uploadedCount = $uploadedCount + 1;  
				}
			}
			
			$count = $count + 1;
		}
		
		return parent::_save($data);
	}
	
	public function ajaxRequestRemoveImage()
	{
		return true;
	}
	
	public function ajaxRequestGetAreaUsers()
	{
		return true;
	}
} 
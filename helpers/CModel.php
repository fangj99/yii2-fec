<?php
/*
���һЩ�����ķ����ݿ����ݡ�
һ�㶼���������á�

*/
namespace fec\helpers;
use Yii; 
class CModel 
{


	# ��models �Ĵ�����Ϣת�����ַ���
	public static function getErrorStr($errors){
		$str = '';
		if(is_array($errors)){
			foreach($errors as $field=>$error_k){
				$str .= $field.':'.implode(",",$error_k)." <br/>";
			}
		}
		return $str;
	}
	
}
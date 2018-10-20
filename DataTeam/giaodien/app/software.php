<?php


class software extends db
{
	

	// Lấy các phần mềm android
	public function layPhanMem($maLoai)
	{
		$sql = "SELECT * FROM PhanMem, Loai WHERE PhanMem.MaLoai = Loai.MaLoai AND PhanMem.MaHDH = $maLoai";

		// Thuc thi cau truy van
		$result = self::$conn->query($sql);
		
		// Chuyen doi tuong thanh mang
		
			//4.Chuyen object thanh mang
		$arr = array();
		while($row = $result->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
	}
}

?>
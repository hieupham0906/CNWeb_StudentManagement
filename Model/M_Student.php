<?php
include_once("E_Student.php");
class Model_Student{
    public function __construct() {}
        public function getAllStudent(){
            $link=mysqli_connect("localhost","root","","dulieu",3307) or die("Khong the ket noi den CSDL MYSQL");
            $sql = "select * from student";
            $rs = mysqli_query($link,$sql);
            $i = 1;
            while($row = mysqli_fetch_array($rs)){
                $id = $row['id'];
                $name = $row['name'];
                $age = $row['age'];
                $university = $row['university'];
                $student[$i++] = new Entity_Student($id, $name, $age, $university);
            }
            return $student;
        }
        public function getStudentDetail($stid){
            // $allStudent = $this->getAllStudent();
            // return $allStudent[$stid];
            $link=mysqli_connect("localhost","root","","dulieu",3307) or die("Khong the ket noi den CSDL MYSQL");
            $sql = "select * from student where id = $stid";
            $rs = mysqli_query($link,$sql);
            $row = mysqli_fetch_array($rs);
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $university = $row['university'];
            $student = new Entity_Student($id, $name, $age, $university);
            return $student;
        }
        public function addStudent($stname, $stage, $stuniversity){
            $link=mysqli_connect("localhost","root","","dulieu",3307) or die("Khong the ket noi den CSDL MYSQL");
            $sql = "insert into student (id, name, age, university) values(null, '$stname', '$stage', '$stuniversity')";
            mysqli_query($link,$sql);
            mysqli_close($link);
        }
        public function updateStudent($stid, $stname, $stage, $stuniversity){
            $link=mysqli_connect("localhost","root","","dulieu",3307) or die("Khong the ket noi den CSDL MYSQL");
            $sql ="UPDATE student set name = '$stname', age = '$stage', university = '$stuniversity' WHERE id = '$stid'";
            mysqli_query($link,$sql);
            mysqli_close($link);
        }
        public function deleteStudent($stid){
            $link=mysqli_connect("localhost","root","","dulieu",3307) or die("Khong the ket noi den CSDL MYSQL");
            $sql ="delete from student WHERE id = '$stid'";
            mysqli_query($link,$sql);
            mysqli_close($link);
        }
        public function searchStudent($gender, $search){
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                if($gender == "id")
                    $sql = "select * from student where id=$search";
                if($gender == "name")
                    $sql = "select * from student where name like '%$search%'";
                else if($gender == "age")
                    $sql = "select * from student where age like '%$search%'";
                 else if($gender == "university")
                    $sql = "select * from student where university like '%$ %'";
                else{
                    $sql = "";
                }
                    $link=mysqli_connect("localhost","root","","dulieu",3307) or die("Khong the ket noi den CSDL MYSQL");        
                    $rs = mysqli_query($link,$sql);
                    $i = 1;
                    while($row = mysqli_fetch_array($rs)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $age = $row['age'];
                        $university = $row['university'];
                        $student[$i++] = new Entity_Student($id, $name, $age, $university);
                    }
                    return $student;
            }
            return null;
            
           
        }

}
?>
<?php
class Admin
{
    public $id;
    public $login;
    public $password;
    public $name;
    public int $dob;
    public int $joinDate;
    public $gender;
    public $address;

    public $sDob;
    public $sDj;


    function __construct($row)
    {
        $this->id = $row['ID'];
        $this->login = $row['Login'];
        $this->password = $row['Password'];
        $this->name = $row['Name'];
        $this->dob = strtotime($row['DOB']);
        $this->joinDate = strtotime($row['Joindate']);
        $this->address = $row['Address'];
        $this->gender = $row['Gender'];
        $this->sDj = $row['Joindate'];
        $this->sDob = $row['DOB'];
    }
    function get_row()
    {
        $color = 'blue';
        $dob = "";
        $join = "";
        $dob = "<font color='{$color}'>{$this->sDob}</font>";
        $join = "<font color='{$color}'>{$this->sDj}</font>";
        if ($this->dob == null) {
            $color = 'red';
            $dob = "<font color='{$color}'>NULL</font>";
        } else if ($this->joinDate < $this->dob) {
            $color = 'red';
            $dob = "<font color='{$color}'>{$this->sDob}</font>";
            $join = "<font color='{$color}'>{$this->sDj}</font>";
        }

        $row =  "<tr>
                        <td>{$this->id}</td>
                        <td>{$this->login}</td>
                        <td>{$this->password}</td>
                        <td>{$this->name}</td>
                        <td>{$dob}</td>
                        <td>{$join}</td>
                        <td>{$this->gender}</td>
                        <td>{$this->address}</td>
                </tr>";

        return $row;
    }
    function getIPAddress()
    {
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    function get_admin_info()
    {
        $bday = new DateTime($this->sDob); // Your date of birth
        $today = new Datetime(date('m.d.y'));
        $age = $today->diff($bday);

        $ip = $this->getIPAddress();
        $ipinfo = "You are NOT located in the Unversity.";

        if (strpos($ip, '10.') === 0 || strpos($ip, '131.125.') === 0) {
            $ipinfo = "You are from Kean domain.";
        }
        $var =  "
                    <body><br>Your IP: {$ip}
                    <br>{$ipinfo}<br

                    <br><a href=\"logout.php\">Logout</a>
                    <br>Welcome user: {$this->name}
                    <br>dob: {$this->sDob}
                    <br>Address: {$this->address}
                    <br>Gender: {$this->gender}
                    <br>Age: {$age->y}
                    <br>Join date: {$this->sDj}
                    
                    <br><br><a href=\"add_course.php\">Add a course</a>
                    <a href=\"search_course.php\">View courses</a></body>
                ";
        return $var;
    }
    public static function getHeader()
    {
        return "
            <tr>
                <td>ID</td>
                <td>Login</td>
                <td>Password</td>
                <td>Name</td>
                <td>DOB</td>
                <td>Join date</td>
                <td>Gender</td>
                <td>Address</td>
            </tr>
        ";
    }

    function get_parameters()
    {
        $var = array('id', 'login', 'password', 'name', 'dob', 'joinDate', 'gender', 'address');
        return $var;
    }
}
class TableReturn
{
    public $table;
    public $count;

    function __construct($table, $count)
    {
        $this->table = $table;
        $this->count = $count;
    }
}

class Course
{
    public string $cid;
    public string $name;
    public int $enrollment;
    public string $faculty;
    public string $BuildingRoom;
    
  

    function __construct($row)
    {
        $this->cid = $row['cid'];
        $this->name = $row['name'];
        $this->term = $row['Term'];
        $this->enrollment = $row['Enrollment'];
        $this->faculty = $row['FacultyName'];
        $this->admin = $row['adid'];
        $this->BuildingRoom = $row['BuildingRoom'];
        $this->Size = $row['Size'];
        if (isset($row['Fid'])) {
            $this->Fid = $row['Fid'];
            $this->Rid = $row['Rid'];
            $this->aid = $row['aid'];
        }
    }

    public static function getHeader()
    {
        return "
                <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Faculty Name</th>
                    
                    <th>Enrollment</th>
                    <th>Building Room</th>
                    <th>Size</th><th>Added by Admin</th>
                </tr>
            ";
    }

    function get_row()
    {
        //          If the room size minus the course’s enrollment is less than 3 (room size – enrollment < 3),
        // highlight that course’s enrollment in red as shown in Figure 6 and Figure 7.
        $color = "black";
        if ($this->Size - $this->enrollment < 3) {
            $color = 'red';
        }
        $var = "
            <tr>
                <td>{$this->cid}</td>
                <td>{$this->name}</td>
                <td>{$this->faculty}</td>
                <td>{$this->term}</td>
                <td><font color=\"{$color}\">{$this->enrollment}</font></td>
                <td>{$this->BuildingRoom}</td>
                <td>{$this->Size}</td>
                <td>{$this->admin}</td>
            </tr>";
        return $var;
    }
}




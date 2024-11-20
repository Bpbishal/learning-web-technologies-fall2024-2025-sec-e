<?php 

    if(isset($_POST['submit']))
    {
        $date =trim($_POST["date"]);

        if (empty($date)) {
            print("Date cannot be empty");
        } else {
            $date_parts = explode('/', $date);
            if (count($date_parts) == 3) {
                $day = intval($date_parts[0]);
                $month = intval($date_parts[1]);
                $year = intval($date_parts[2]);
                if (!checkdate($month, $day, $year)) {
                    print("Invalid");
                } elseif ($year < 1953 || $year > 1998) {
                    print("Year must be between 1953 and 1998");
                } elseif ($month < 1 || $month > 12) {
                    print("Month must be between 1 and 12");
                } elseif ($day < 1 || $day > 31) {
                    print("Day must be between 1 and 31");
                } else {
                    print("Your Date of Birth is: $date");
                }
            } else {
                print("Invalid date format");
            }
     
        }
    }


?>
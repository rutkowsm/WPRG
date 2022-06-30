<?php

function kalendarz($mon) {

        if (!is_numeric($mon) or $mon > 12 or $mon < 1) {
            echo "Error! Use number 1 - 12";
            return;
        }
        switch ($mon) {
            case 1:
                echo "January: 31 days";
                break;
            case 2:
                echo "February: 28 days";
                break;
            case 3:
                echo "March: 31 days";
                break;
            case 4:
                echo "April: 30 days";
                break;
            case 5:
                echo "May: 31 days";
                break;
            case 6:
                echo "June: 30 days";
                break;
            case 7:
                echo "July: 31 days";
                break;
            case 8:
                echo "August: 31 days";
                break;
            case 9:
                echo "September: 30 days";
                break;
            case 10:
                echo "October: 31 days";
                break;
            case 11:
                echo "Novembre: 30 days";
                break;
            case 12:
                echo "December: 31 days";
                break;
        }
    }

kalendarz(-1);

 ?>

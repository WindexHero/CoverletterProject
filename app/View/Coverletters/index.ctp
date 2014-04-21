<h1>Exam Cover Letter Manager</h1>
</br>
<p>Welcome to the testing center's cover sheet management system.</p>

<form>
    
</form>

<div id="coverletter">
    <table>
        <?php
        foreach ($coverletters as $coverletter) 
        {
            echo "<tr>";
            echo "<td>{$coverletter['Coverletter']['id']}</td>";
            echo "<td>{$coverletter['Coverletter']['scheduled_test_date_time']}</td>"; 
            echo "<td>{$coverletter['Coverletter']['student_name']}</td>";
            echo "<td>{$coverletter['Coverletter']['student_num']}</td>";
            echo "<td>{$coverletter['User']['full_name']}</td>";
            echo "<td>{$coverletter['Coverletter']['time_allowed_in_mins']}</td>";
            echo "<td>{$coverletter['Coverletter']['status']}</td>";
            // Add URL to specific coversheet
            echo "</tr>";
        }
        ?>
    </table>
</div>
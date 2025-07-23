<?php
if(isset($_POST['delete']))
{
   include '../db_con.php';
   $id =$_POST['id'];

   $del_que ="delete from testimonials where id =$id";
   mysqli_query($con,$del_que);

?>
<script>
    alert('Data deleted successfully!');
    window.location='add_testimonial.php';
</script>

<?php
}
else
{
    header('location:add_testimonial.php');
}
?>




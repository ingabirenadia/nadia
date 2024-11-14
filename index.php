<script src="sweetalert.min.js"></script>
<form action="do-something.php" method="POST" onsubmit="return submitForm(this);">

<input type="submit"/>


</form>
<script>
function submitForm(form) {
    swal({
        title: "Are you sure",
    text: "This form will be submited",
        icon: "warning",
        buttons: true,
        dangerMode: true,


    })
    .then((isOkay) =>{
        if (isOkay) {
            form.submit();
        }
    });
    return false;
}
</script>

<script defer>


    let timerInterval
    Swal.fire({
        titleText: "{{$name}}",
        backdrop: false,
        toast: true,
        customClass: {
            icon: 'info',
        },
        background: '#fff',
        allowOutsideClick: true,
        showConfirmButton: false,

        timer: 3000,
        timerProgressBar: true,
        position: 'bottom-right',
        willClose: () => {
            clearInterval(timerInterval)
        }
    })
</script>

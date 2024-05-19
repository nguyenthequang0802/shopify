<script>
    function turnOnNotifications(message, type){
        const alertElement = document.getElementById('alert-'+type);
        console.log(alertElement)
        const alertMessageElement = document.getElementById('alert-message-'+type);
        console.log(alertMessageElement)
        alertMessageElement.innerText = message;
        alertElement.classList.remove('hidden');
        alertElement.classList.add('block');
        setTimeout(function (){
            alertElement.classList.remove('block');
            alertElement.classList.add('hidden');
        }, 5000);
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        $('.action-delete').on('click', function (e){
            e.preventDefault();
            let urlRequest = $(this).data('url');
            let element = $(this);
            console.log(urlRequest);
            console.log(element)
            $.ajax({
                type: "GET",
                url: urlRequest,
                success: function (response) {
                    element.parent().parent().remove();
                    location.reload();
                    turnOnNotifications(response.message, "success");
                },
                error: function (error) {
                    turnOnNotifications(error.message, "error");
                }
            })
        })
    });
</script>

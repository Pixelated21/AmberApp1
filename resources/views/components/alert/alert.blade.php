
<div
    id="alert_dialog"
    {{$attributes->merge(['class' => 'my-3  block text-sm text-left text-white h-12 flex items-center p-4  relative'])}}
>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        class="flex-shrink-0 w-6 h-6 mx-2 stroke-current"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
        ></path>
    </svg>
    {{$slot}}
    <button
        id="alert_close_btn"
        class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-2 mr-6 outline-none focus:outline-none"
    >
        <span>×</span>
    </button>
</div>

<script>
    $(document).ready(function (){
        console.log('Ok')
       let alert_close_btn = $('#alert_close_btn'),
            alert_dialog  = $('#alert_dialog'),
            create_btn = $('#create_btn');


       alert_close_btn.on('click',function (){
           console.log('Ok')
           alert_dialog.hide();
       });
    });
</script>

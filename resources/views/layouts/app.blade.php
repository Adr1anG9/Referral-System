<!DOCTYPE html>
<html lang="en">
<head>
  <title>Referral System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    h1 { 
      @apply text-4xl mb-10
    }
    h2 {
      @apply text-2xl mb-5
    }

    label{
      @apply block uppercase text-slate-700 mb-2
    }

    input, textarea {
      @apply shadow-sm appearance-none border w-52 py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }

    .error {
      color:red;
      font-size: 0, 8rem;
    }

    .link_add_patient {
      @apply text-xl font-bold text-gray-700 underline decoration-pink-500 hover:bg-slate-50 hover:text-pink-500
    }

    .link_home{
      @apply text-xl text-blue-500 mb-10 hover:text-blue-700 hover:underline
    }

    .header_2_form{
      @apply text-2xl mb-3 mt-10
    }

    .btn {
      @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 
    }
    .btn_view {
      @apply hover:bg-green-400
    }
    .btn_edit{
      @apply hover:bg-blue-400
    }
    .btn_delete{
      @apply hover:bg-red-400
    }
  </style>
{{-- blade-formatter-enable --}}

</head>
<body class="container mx-auto mt-10 mb-10">
  <h1>@yield('title')</h1>
  <div>
    @yield('content')
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{carf_token()}}"> --}}
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{asset('css/chat.css')}}">
    <title>Document</title>
</head>
<body>
    <section class="msger">
        <header class="msger-header">
          <div class="msger-header-title">
            <i class="fas fa-comment-alt"></i> 
            <span class="chatwiht"></span>
            <span class="typing"style="display: none;"> esta escribiendo</span>
          </div>
          <div class="msger-header-options">
            <span class="chatStatus offline"><i class="fas fa-glode"></i></span>
          </div>
        </header>
      
        <div class="msger-chat"></div>

        <form class="msger-inputarea">
          <input type="text" class="msger-input"oninput="sendTypingEvent()" placeholder="Enter your message..">
          <button type="submit" class="msger-send-btn">Send</button>
            </form>

    </section>
      
          <script src="/js/app.js"></script>
          <script src="/js/chat.js"></script>
         
      
</body>
</html>
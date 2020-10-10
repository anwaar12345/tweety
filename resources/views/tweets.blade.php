<div class="flex p-4 border border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
         <a href="{{ route('profile',$tweet->user->name) }}">
             <img src="https://avatars.dicebear.com/api/avataaars/example.svg" 
                alt="" class="rounded-full mr-2" style="height:50px;border:1px solid lightblue;">
                </a>       
                 </div>
                 <div>
              <h5 class="font-bold mb-4">
              <a href="{{ route('profile',$tweet->user->name) }}">
                {{ $tweet->user->name }}
              </a>  
              <p class="text-sm">
            {{ $tweet->body }}                    
        </p>
      </h5>
</div>
</div>
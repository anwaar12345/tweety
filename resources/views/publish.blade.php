<div class="border boder-blue-400 rounded-lg px-8 py-6 mb-8">
                    <form method="post" action="{{ url('/tweets') }}">
                    @csrf    
                        <textarea name="body" class="w-full" placeholder="Tweet it !" >
                        </textarea>

                        <hr class="my-4">
                    
                        <footer class="flex justify-between">
                            
                                <img src="https://avatars.dicebear.com/api/avataaars/example.svg" 
                                alt="" class="rounded-full mr-2" style="height:45px; border:1px solid lightblue;">


                                <button type="submit" 
                                    class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white">
                                    Make a Tweet</button>
                        </footer>
                    
                    </form>
                    @error('body')
                    <p class="text-sm text-red-500 mt-2">
                        {{ $message }}
                    </p>
                    @enderror  
                </div>
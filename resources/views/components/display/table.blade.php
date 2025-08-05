 @props(['route'])
 
 
 <div class="px-6 py-4"> <!-- Adds spacing from browser edges -->
        <table class="w-full max-w-7xl mx-auto text-left  border-separate border-spacing-y-4">
            <thead>
                <tr class="text-gray-600 font-semibold">

                  {{$header}}


                     </tr>
            </thead>


              
            <tbody class="divide-y divide-transparent">
              
                    

                      {{$body}}


                       </tr>
              
            </tbody>
        </table>
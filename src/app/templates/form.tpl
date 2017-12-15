{{ #include header }}

   <form action="{{ form.action }}" method="{{ form.method }}">
      <fieldset>
         <ul>
            {{ #each input in form.inputs }}
            
               <li>
                  <label for="{{ input.name }}">{{ input.label }}</label>
               </li>
               <li>
                  <input 
                     type="{{ input.type }}" 
                     id="{{ input.name }}"
                     name="{{ input.name }}"
                     placeholder="{{ input.placeholder }}"
                     required
                  >
               </li>

            {{ /each }}
            <li>
               <label for="{{ form.textarea.name }}">{{ form.textarea.label }}</label>
            </li>
            <li>
               <textarea name="{{ form.textarea.name }}" id="{{ form.textarea.name }}" required>
            </textarea>
            </li>
         </ul>
         <button>Submit</button>
      </fieldset>
   </form>

{{ #include footer }}



	

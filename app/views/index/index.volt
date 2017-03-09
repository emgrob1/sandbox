  

<h2>Sample</h2>
{{ form('forms/sampleForm', 'method': 'post') }}

Description:
 <label for="name">Name</label>
    {{ text_field("name", "size": 32) }}

    <label for="type">Telephone</label>
    
        {{ text_field("telephone", "size":15) }}
    
      <label for="type">Type</label>
    {{ select("type", productTypes, 'using': ['id', 'name']) }}
    
    
    {{ submit_button('Send') }}



{{ end_form()}}

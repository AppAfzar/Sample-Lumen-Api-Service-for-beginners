# Sample-Lumen-Api-Service-for-beginners
This is a sample API service created by Lumen the stunningly fast micro-framework by Laravel for beginners.

This API is now avilable now to test: sample1.appafzar.com

## Excample: 

1) Read post with id=5: (GET)
    ### sample1.appafzar.com/api/post/read?id=5
    
    
2) Read pagination posts: (POST)
    ### sample1.appafzar.com/api/post/read_all?per_page=15&page=1
    you can send extra parameters in post
    
    
3) Create a new Post (POST)
    ### sample1.appafzar.com/api/post/create
    request body:   { 
                    "title":"my test",
                    "description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                    }
            
            
4) Update a post (POST)
    ### sample1.appafzar.com/api/post/update
    request body:   {
                    "id":2,
                    "title":"my test",
                    "description":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                    }
                 
                 
5) Delete a post (GET)
    ### sample1.appafzar.com/api/post/delete?id=1
    
__________________________________________________________________________
### Authentication is not included to this API service to simplify for beginners.
    
    

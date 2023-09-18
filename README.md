## Task Name: Basic CRUD Application with a Person Resource
### Description
This task executes a Create-Retrieve-Update-Delete    CRUD Operation on a person resource "name".

## Endpoints

### Create Person Resource 
URL - https://seyiadel-hngx-stagetwo.onrender.com/api

This takes a POST request to create/add attribute to the database.

Request body using curl:

```
$ curl -d '{"name": "Bimpe"}' -H 'Content-Type: application/json' -X POST https://seyiadel-hngx-stagetwo.onrender.com/api
```
Response:

```
{ 'message':'Successfully Created', 
  'status_code': 201, 
   'data': { "id": 1,
              "name": "Bimpe",
            "created_at": "2023-09-18T22:15:21.000000Z",
            "updated_at": "2023-09-18T22:15:21.000000Z"
            }
}
```
### Retrieve Person Resource 
URL - https://seyiadel-hngx-stagetwo.onrender.com/api/persons/{id}

This requires using sending an id parameter through a GET request prefixing it at the end of the url.

Request body using curl:

```
$ curl -H 'Content-Type: application/json' https://seyiadel-hngx-stagetwo.onrender.com/api/persons/1
```
Response:
```
{ 'message' : 'Retrieved Successfully', 
  'status_code' : 200, 
   'data' : { 
             "id":1,
             "name":"Bimpe",
            "created_at": "2023-09-18T22:15:21.000000Z",
        "updated_at": "2023-09-18T22:15:21.000000Z"
         }
}
``` 

### Update Person Resource
URL - https://seyiadel-hngx-stagetwo.onrender.com/api/persons/{id}

This requires sending an id parameter to query the  database to perform an edit operation using the PUT request.

Request body using curl:
```
$ curl -d '{"name": "Adelere"}' -H 'Content-Type: application/json' -X PUT https://seyiadel-hngx-stagetwo.onrender.com/api/persons/1
```
Response:
```
{
  'message' : 'Details Successfully Updated.', 
  'status_code' : 200, 
  'data' : {
             "id":1,
             "name":"Adelere"
            "created_at": "2023-09-18T22:15:21.000000Z",
            "updated_at": "2023-09-18T22:15:21.000000Z"
            }
  }
```

### Delete Person Resource
URL - https://seyiadel-hngx-stagetwo.onrender.com/api/persons/{id}

This is to remove the person resource from database through the DELETE request providing an id parameter

Request body using curl:
```
curl -X DELETE https://seyiadel-hngx-stagetwo.onrender.com/api/persons/1
```
Response:
```
{ 'message': 'Person Details deleted', 
   'status_code':204 
}
```


### Steps to run the local development server on your machine:
Open up ypur terminal
`cd` to where you would like to store the project.
Make sure you have git installed if you don't have you can get it @ git and download your machine version. Spin it up and running.

make use git to clone the project, go to the page, click on a drop down "code" then you copy a link then go to your terminal git clone <<<github ink >>>



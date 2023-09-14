## Task Name: Basic CRUD Application with a Person Resource
### Description
This task executes a Create-Retrieve-Update-Delete    CRUD Operation on a person resource "name".

## Endpoints

### Create Person Resource 
URL - /api

This takes a POST request to create/add attribute to the database.

Request body using curl:

```
$ curl -d '{"name": "Adel"}' -H 'Content-Type: application/json' -X POST http://api:port/api/v1/path
```
Response:

```
{ 'message':'Successfully Created', 
  'status_code': 201, 
   'data': { "id": 11,
              "name": "Adel"
            }
}
```
### Retrieve Person Resource 
URL -/api/persons/{id}

This requires using sending an id parameter through a GET request prefixing it at the end of the url.

Request body using curl:

```
$ curl -H 'Content-Type: application/json' https://app.com/api/persons/11
```
Response:
```
{ 'message' : 'Retrieved Successfully', 
  'status_code' : 200, 
   'data' : { 
             "id":11,
             "name":"Adel"
         }
}
``` 

### Update Person Resource
URL - /api/persons/{id}

This requires sending an id parameter to query the  database to perform an edit operation using the PUT request.

Request body using curl:
```
$ curl -d '{"name": "Adelere"}' -H 'Content-Type: application/json' -X PUT http://api:port/api/persons/11
```
Response:
```
{
  'message' : 'Details Successfully Updated.', 
  'status_code' : 200, 
  'data' : {
             "id":11,
             "name":"Adelere"
            }
  }
```

### Delete Person Resource
URL - /api/persons/{id}

This is to remove the person resource from database through the DELETE request providing an id parameter

Request body using curl:
```
curl -X DELETE https://example.com/api/11
```
Response:
```
{ 'message': 'Person Details deleted', 
   'status_code':204 
}
```
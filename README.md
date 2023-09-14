## Task Name; Basic CRUD Application with a Person Resource
### Description
This task executes a Create-Retrieve-Update-Delete    Operation on a person resource "name".

## Endpoints

### Create
URL - /api

This takes a POST request to create/add attribute to the database.

Request Body:
```curl -d '{"name": "Adel"}' -H 'Content-Type: application/json' -X POST http://api:port/api/v1/path
```
Response:
```{'message':'Successfully Created', 
  'status_code': 201, 
   'data': { "id": 11,
              "name": "Adel"
            }
}```
 
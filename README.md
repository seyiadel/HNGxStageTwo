## Task Name; Basic CRUD Application with a Person Resource
### Description
This task executes a Create-Retrieve-Update-Delete    Operation on a person resource "name".

## Endpoints

### Create
URL - /api

This takes a POST request to create/add attribute to the database.

Request Body:
```
curl -X POST -H "Content-Type: application/json" \
    -d '{"name": "linuxize"}' \
    https://example/api
```

Response: 
    {
    
}
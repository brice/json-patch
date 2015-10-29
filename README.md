
### Presentation 

This small project is a proof of concept about JSON Patch related to holaSpirit Project.

### Description

First of all, we have an object that implements a proposal class. 

This object is a modification proposal. He contains Operations

**More important question :** What do we patch? Is it a proposal of a tension or a circle?

#### 1. We patch the proposal : 

The front end will send a POST query to create the proposal, then it will send PATCH queries to update the proposal.
The back end will send the current tension object, patched with proposals. 
At last, the front and will send a query to accept the tension

#### 2. We patch the circle : 

The backed will propose a PUT Query where the front end will send the proposal based on this form 

```json
[
    { "op": "add", "path": "/role", "value": {"name": "toto"}},
    { "op": "update", "path": "/role/id", "value": {"name": "titi"}}
]
```

**Question :** Could it be a set of change, related to a patch operation? Or is it a result of PATCH operation?

Reminder : 

```
Proposal's operations

* `action`: add, update, delete, move
* `path`
* `value`
```

update ==> replace
delete ==> remove


### Various questions


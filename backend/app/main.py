from fastapi import FastAPI

# IMPORTANTE: Para lanzar el env y después uvicorn en Windows11:
# Movernos a la ruta \app 
# Desactivar la política anti-scripts de powershell:
#   Set-ExecutionPolicy -ExecutionPolicy Unrestricted -Scope Process
# Desde la ruta \app, lanzar el script para activar el entorno: 
#    ..\env\Scripts\Activate.ps1
# Y por último lanzar uvicorn:
#   uvicorn main_app --reload

# Voy por: https://fastapi.tiangolo.com/tutorial/path-params/

# Inicializamos el objeto principal de FastAPI
app = FastAPI()

# Con el objeto app, creamos un 'endpoint' en la ruta indicada
# Endpoint de los programas
@app.get("/programs")# Gracias al decorador "@" FastAPI sabe que la función de abajo está asociada al endpoint de arriba
async def get_all_programs():
    return {"all_programs": ["1", "2", "3", "..."]}

# Endpoint para obtener un programa por ID
@app.get("/programs/{id}")
async def get_program(id: int):
    return {"program": id}

# Endpoint de mis projectos
@app.get("/projects") 
async def get_all_proyects():
    # De manera asyncrona, hacemos una función que retorne el dato que nos pidan
    return {"all_proyects": ["1", "2", "3", "..."]}

# Endpoint para obtener un projecto por ID
@app.get("/projects/{id}")
async def get_project(id: int):
    return {"project": id}

# Endpoint para obtener mi lista de habilidades
@app.get("/skills")
async def get_skills():
    return {"skills": "my programmer skills"}

# Endpoint para obtener mi experiencia laboral
@app.get("/work_experience")
async def get_work_experience():
    return {"work_experience": "my work experience"}

# Endpoint para obtener el about me y presentarme como web developer
@app.get("/about_me")
async def get_about_me():
    return {"about_me": "presentation"}

 # ¡¡¡¡ FALTA IMPLEMENTAR BIEN !!!!
# Endpoint para recibir el formulario de contacto
@app.post("/contact") # Para este caso, usaremos un Query Param
async def contact(json_email: dict): # Falta implementar clase EmailData
    return {"message": f"Correo electrónico recibido: {json_email}"}







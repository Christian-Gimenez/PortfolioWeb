from sqlalchemy import create_engine
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import sessionmaker

# Constante con la URL de la db
SQLITE_DATABASE_URL = "sqlite:///./sql_app.db"
# MYSQL_DATABASE_URL = "mysql://user:password@mysqlserver/db" No hace falta conector al usar el ORM SQLAlchemy

engine = create_engine(
                        # El 2ºarg solo es necesario para SQLite
    SQLITE_DATABASE_URL, connect_args={"check_same_thread" : False}
    # MYSQL_DATABASE_URL
)

# Creamos la sesión local, representa un 'workspace' para interactuar con la db
# Cada vez que se interactua con la db, se creará una instancia de SessionLocal
SessionLocal = sessionmaker(autocommit=False, autoflush=False, bind=engine)

# Clase 'base' para crear cada modelo de clases de la db (los modelos ORM)
Base = declarative_base()
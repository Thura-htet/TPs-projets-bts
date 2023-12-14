cmake_minimum_required(VERSION 3.26)
project(gestion_file_d_attente)

set(CMAKE_CXX_STANDARD 17)

add_executable(gestion_file_d_attente main.cpp
        job.cpp
        job.h
        spool.cpp
        spool.h
)

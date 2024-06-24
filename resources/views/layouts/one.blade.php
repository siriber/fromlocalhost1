@extends('cars.layout')

@section('content')
    <div class="container bg-secondary text-center text-white">
        <div class="row">
            <div class="col">
                <h1>Standard Heading</h1>
                <p class="text-danger">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque ducimus,
                    adipisci officia rem animi qui deserunt iste ea soluta quasi?
                </p>
                <button type="button" class="btn btn-primary m-2 p-2">Primary Button</button>
                <button type="button" class="btn btn-danger m-3 p-3">Primary Button</button>
            </div>
        </div>
    </div>
    <!--end of container-->
    <div class="container-fluid bg-warning text-dark py-5">
        <div class="row">
            <div class="col">
                <h1 class="display-1">Display-1</h1>
                <p class="display-4">Display-4</p>
                <p class="text-success lead px-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Porro quaerat asperiores in quo facilis doloremque amet alias ex consequatur dolore.
                </p>
                <button class="btn btn-dark text-danger mt-4">btn-dark</button>
                <button class="btn btn-success text-muted mb-4">btn-success</button>
                <button class="btn btn-secondary text-primary mt-4">btn-secondary</button>

            </div>
        </div>
    </div>
    <!--end of container fluid-->
    <section id="skills" class="bg-dark">
        <div class="container">
            <div class="col">
                <div class="row text-center">
                    <h1 class="text-white">Section Example</h1>
                    <p class="display-4 text-warning">Paragraph Display</p>
                    <p class="tex-info px- text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem expedita unde neque
                        laudantium dicta nihil nam, possimus deserunt doloribus quae?
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection

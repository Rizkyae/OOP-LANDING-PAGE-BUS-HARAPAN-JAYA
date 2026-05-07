<?php
class HomeController extends Controller {
    public function index() {
        $routeModel      = $this->model("Route");
        $fleetModel      = $this->model("Fleet");
        $testiModel      = $this->model("Testimonial");

        $data["routes"]       = $routeModel->getRoutes();
        $data["fleet"]        = $fleetModel->getFleet();
        $data["testimonials"] = $testiModel->getTestimonials();

        $this->view("home", $data);
    }
}

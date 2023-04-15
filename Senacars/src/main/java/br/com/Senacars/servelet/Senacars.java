package br.com.Senacars.servelet;


import br.com.Senacars.dao.CarDao;
import br.com.Senacars.model.Car;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;

@WebServlet("/create-car")
public class Senacars extends HttpServlet {

   @Override
   protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {

      Car car = new Car();

      String carName = req.getParameter("car-name");
      car.setName(carName);

      int carAno = Integer.parseInt(req.getParameter("car-ano"));
      car.setAno(carAno);

      String carCombustivel = req.getParameter("car-combustivel");
      car.setCombustivel(carCombustivel);

      int carKm = Integer.parseInt(req.getParameter("car-km"));
      car.setKm(carKm);

      String carCor = req.getParameter("car-cor");
      car.setCor(carCor);

      new CarDao().createcar(car);


      System.out.println(carName);



      req.getRequestDispatcher("index.jsp").forward(req, resp);



      }
   }
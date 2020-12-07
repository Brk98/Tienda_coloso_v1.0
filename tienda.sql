
CREATE SCHEMA IF NOT EXISTS `Tienda` DEFAULT CHARACTER SET utf8 ;
USE `Tienda` ;

-- -----------------------------------------------------
-- Table `Tienda`.`Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda`.`Producto` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `codigo_producto` VARCHAR(45) NULL,
  `marca_producto` VARCHAR(45) NULL,
  `nombre_producto` VARCHAR(45) NULL,
  `cantidad` INT NULL,
  `precio` DOUBLE NULL,
  `tipo` VARCHAR(45) NULL,
  PRIMARY KEY (`idProducto`));


-- -----------------------------------------------------
-- Table `Tienda`.`Empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda`.`Empleado` (
  `idEmpleado` INT NOT NULL AUTO_INCREMENT,
  `RFC_empleado` VARCHAR(45) NULL,
  `nombre_empleado` VARCHAR(45) NULL,
  `telefono_empleado` VARCHAR(45) NULL,
  `domicilio_empleado` VARCHAR(100) NULL,
  `usuario` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`idEmpleado`));


-- -----------------------------------------------------
-- Table `Tienda`.`Proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda`.`Proveedor` (
  `idProveedor` INT NOT NULL AUTO_INCREMENT,
  `RFC_proveedor` VARCHAR(45) NULL,
  `nombre_proveedor` VARCHAR(45) NULL,
  `telefono_proveedor` VARCHAR(45) NULL,
  `domicilio_proveedor` VARCHAR(45) NULL,
  `correo_proveedor` VARCHAR(45) NULL,
  PRIMARY KEY (`idProveedor`));


-- -----------------------------------------------------
-- Table `Tienda`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `nombre_cliente` VARCHAR(45) NULL,
  `telefono_cliente` VARCHAR(45) NULL,
  PRIMARY KEY (`idCliente`));


-- -----------------------------------------------------
-- Table `Tienda`.`Venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda`.`Venta` (
  `idVenta` INT NOT NULL AUTO_INCREMENT,
  `IVA` INT NULL DEFAULT '16',
  `Total` DOUBLE NULL,
  `Cliente_idCliente` INT NOT NULL,
  `Empleado_idEmpleado` INT NOT NULL,
  PRIMARY KEY (`idVenta`, `Cliente_idCliente`, `Empleado_idEmpleado`),
  INDEX `fk_Venta_Cliente_idx` (`Cliente_idCliente` ASC) VISIBLE,
  INDEX `fk_Venta_Empleado1_idx` (`Empleado_idEmpleado` ASC) VISIBLE,
  CONSTRAINT `fk_Venta_Cliente`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Tienda`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Venta_Empleado1`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `Tienda`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `Tienda`.`Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda`.`Pedido` (
  `idPedido` INT NOT NULL AUTO_INCREMENT,
  `Cantidad` INT NULL,
  `Proveedor_idProveedor` INT NOT NULL,
  `Empleado_idEmpleado` INT NOT NULL,
  `Fecha` DATE NULL,
  PRIMARY KEY (`idPedido`, `Proveedor_idProveedor`, `Empleado_idEmpleado`),
  INDEX `fk_Pedido_Proveedor1_idx` (`Proveedor_idProveedor` ASC) VISIBLE,
  INDEX `fk_Pedido_Empleado1_idx` (`Empleado_idEmpleado` ASC) VISIBLE,
  CONSTRAINT `fk_Pedido_Proveedor1`
    FOREIGN KEY (`Proveedor_idProveedor`)
    REFERENCES `Tienda`.`Proveedor` (`idProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Empleado1`
    FOREIGN KEY (`Empleado_idEmpleado`)
    REFERENCES `Tienda`.`Empleado` (`idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `Tienda`.`Detalle_Venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda`.`Detalle_Venta` (
  `Venta_idVenta` INT NOT NULL AUTO_INCREMENT,
  `Venta_Cliente_idCliente` INT NOT NULL,
  `Venta_Empleado_idEmpleado` INT NOT NULL,
  `Producto_idProducto` INT NOT NULL,
  `cantidad` INT NULL,
  `precio` DOUBLE NULL,
  PRIMARY KEY (`Venta_idVenta`, `Venta_Cliente_idCliente`, `Venta_Empleado_idEmpleado`, `Producto_idProducto`),
  INDEX `fk_Venta_has_Producto_Producto1_idx` (`Producto_idProducto` ASC) VISIBLE,
  INDEX `fk_Venta_has_Producto_Venta1_idx` (`Venta_idVenta` ASC, `Venta_Cliente_idCliente` ASC, `Venta_Empleado_idEmpleado` ASC) VISIBLE,
  CONSTRAINT `fk_Venta_has_Producto_Venta1`
    FOREIGN KEY (`Venta_idVenta` , `Venta_Cliente_idCliente` , `Venta_Empleado_idEmpleado`)
    REFERENCES `Tienda`.`Venta` (`idVenta` , `Cliente_idCliente` , `Empleado_idEmpleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Venta_has_Producto_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `Tienda`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `Tienda`.`Detalle_pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda`.`Detalle_pedido` (
  `Producto_idProducto` INT NOT NULL AUTO_INCREMENT,
  `Pedido_idPedido` INT NOT NULL,
  `cantidad` INT NULL,
  `precio` DOUBLE NULL,
  PRIMARY KEY (`Producto_idProducto`, `Pedido_idPedido`),
  INDEX `fk_Producto_has_Pedido_Pedido1_idx` (`Pedido_idPedido` ASC) VISIBLE,
  INDEX `fk_Producto_has_Pedido_Producto1_idx` (`Producto_idProducto` ASC) VISIBLE,
  CONSTRAINT `fk_Producto_has_Pedido_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `Tienda`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_has_Pedido_Pedido1`
    FOREIGN KEY (`Pedido_idPedido`)
    REFERENCES `Tienda`.`Pedido` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


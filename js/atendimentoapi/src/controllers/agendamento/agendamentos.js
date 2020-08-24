var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Agenda lista' });
});

/* GET home page. */
router.post('/', function(req, res, next) {
    res.render('index', { title: 'Agenda post Cadastro' });
});

/* GET home page. */
router.put('/', function(req, res, next) {
    res.render('index', { title: 'Agenda put atualiza' });
});

/* GET home page. */
router.delete('/', function(req, res, next) {
    res.render('index', { title: 'Agenda delete excluir' });
});

module.exports = router;

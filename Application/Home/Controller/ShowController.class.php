<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {
    public function index(){
    	Vendor('Mobile-Detect.Mobile_Detect');

        $decoration = M('Decoration')->order("no_term")->select();
        $payment = M('Payment')->select();
        $all = 0;
        foreach ($decoration as &$d_v) {
        	$total = 0;
        	foreach ($payment as $p_v) {
        		if ($p_v['dec_id'] == $d_v['id']) {
        			$total += $p_v['price'];
        		}
        	}
        	$d_v['total'] = $total;
        	$all += $total;
        }

        $budget = M('Config')->where("name='budget'")->getField('value');

        $stat = M('Payment')->field('dec_no_term,sum(price)')->group('dec_no_term')->select();
        foreach ($stat as &$s_v) {
            $term = M('Termnumber')->where('id=%d', $s_v['dec_no_term'])->getField('term');
            $s_v['term'] = $term;
        }
        
        $this->assign('decoration', $decoration);
        $this->assign('payment', $payment);
        $this->assign('all', $all);
        $this->assign('budget', $budget);
        $this->assign('stat', $stat);
        $detect = new \Mobile_Detect;
    	if ($detect->isMobile()) {
    		$this->display('m');
    	} else {
    		$this->display();
    	}
        
    }
    
}

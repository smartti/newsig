<?php defined('_JEXEC') or die('Restricted access'); ?>

<style type="text/css">
    .input-wrapper {
        padding: .2em;
        border: 1px #333 solid;
    }
    .input-wrapper input, .input-wrapper textarea {
        width: 100%;
        margin: 0;
        padding: 0;
        font: inherit;
        color: inherit;
        border: 0;
        background-color: transparent;
    }
</style>
<form id="frmPct" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="frmPct" 
        oninput="A1_f.value  = (parseInt(nu_00a.value)*0.05).toFixed(2)
                 A2_f.value = parseInt(nu_01a.value) + parseInt(nu_01b.value) + parseInt(nu_01c.value) + parseInt(nu_01d.value) + parseInt(nu_01e.value)
                 A3_f.value = parseInt(nu_02a.value) + parseInt(nu_02b.value) + parseInt(nu_02c.value) + parseInt(nu_02d.value) + parseInt(nu_02e.value)
                 A4_f.value = parseInt(nu_03a.value) + parseInt(nu_03b.value) + parseInt(nu_03c.value) + parseInt(nu_03d.value) + parseInt(nu_03e.value)
                 
                 A5_f.value = parseInt(A1_f.value)*2
                 A12_f.value= parseInt(nu_12f.value) + parseInt(nu_13f.value)
                 B1_a.value = parseInt(nu_14a.value) + parseInt(nu_15a.value) + parseInt(nu_16a.value) + parseInt(nu_17a.value)                
                 B1_b.value = parseInt(nu_14b.value) + parseInt(nu_15b.value) + parseInt(nu_16b.value) + parseInt(nu_17b.value)                 
                 B1_c.value = parseInt(nu_14c.value) + parseInt(nu_15c.value) + parseInt(nu_16c.value) + parseInt(nu_17c.value)                 
                 B1_d.value = parseInt(nu_14d.value) + parseInt(nu_15d.value) + parseInt(nu_16d.value) + parseInt(nu_17d.value)                 
                 B1_e.value = parseInt(nu_14e.value) + parseInt(nu_15e.value) + parseInt(nu_16e.value) + parseInt(nu_17e.value)
                 
                 B1_1_f.value = parseInt(nu_14a.value) + parseInt(nu_14b.value) + parseInt(nu_14c.value) + parseInt(nu_14d.value) + parseInt(nu_14e.value)
                 B1_2_f.value = parseInt(nu_15a.value) + parseInt(nu_15b.value) + parseInt(nu_15c.value) + parseInt(nu_15d.value) + parseInt(nu_15e.value)
                 B1_3_f.value = parseInt(nu_16a.value) + parseInt(nu_16b.value) + parseInt(nu_16c.value) + parseInt(nu_16d.value) + parseInt(nu_16e.value)
                 B1_4_f.value = parseInt(nu_17a.value) + parseInt(nu_17b.value) + parseInt(nu_17c.value) + parseInt(nu_17d.value) + parseInt(nu_17e.value)
                 
                 B2_a.value = parseInt(nu_18a.value) + parseInt(nu_19a.value)
                 B2_b.value = parseInt(nu_18b.value) + parseInt(nu_19b.value)
                 B2_c.value = parseInt(nu_18c.value) + parseInt(nu_19c.value)
                 B2_d.value = parseInt(nu_18d.value) + parseInt(nu_19d.value)
                 B2_e.value = parseInt(nu_18e.value) + parseInt(nu_19e.value)
                 B_a.value  = parseInt(B1_a.value) + parseInt(B2_a.value)
                 B_b.value  = parseInt(B1_b.value) + parseInt(B2_b.value)                 
                 B_c.value  = parseInt(B1_c.value) + parseInt(B2_c.value)
                 B_d.value  = parseInt(B1_d.value) + parseInt(B2_d.value)
                 B_e.value  = parseInt(B1_e.value) + parseInt(B2_e.value)                 
                 B1_f.value = parseInt(B1_a.value) + parseInt(B1_b.value) + parseInt(B1_c.value) + parseInt(B1_d.value) + parseInt(B1_e.value)
                 B2_f.value = parseInt(B2_a.value) + parseInt(B2_b.value) + parseInt(B2_c.value) + parseInt(B2_d.value) + parseInt(B2_e.value)
                 B_f.value  = parseInt(B1_f.value) + parseInt(B2_f.value)
                 
                 B2_1_f.value = parseInt(nu_18a.value) + parseInt(nu_18b.value) + parseInt(nu_18c.value) + parseInt(nu_18d.value) + parseInt(nu_18e.value)
                 B2_2_f.value = parseInt(nu_19a.value) + parseInt(nu_19b.value) + parseInt(nu_19c.value) + parseInt(nu_19d.value) + parseInt(nu_19e.value)
                 
                 C1_1_f.value = parseInt(nu_20a.value) + parseInt(nu_20b.value) + parseInt(nu_20c.value) + parseInt(nu_20d.value) + parseInt(nu_20e.value)
                 C1_2_f.value = parseInt(nu_21a.value) + parseInt(nu_21b.value) + parseInt(nu_21c.value) + parseInt(nu_21d.value) + parseInt(nu_21e.value)
                 
                 C1_a.value = parseInt(nu_20a.value) + parseInt(nu_21a.value)
                 C1_b.value = parseInt(nu_20b.value) + parseInt(nu_21b.value)
                 C1_c.value = parseInt(nu_20c.value) + parseInt(nu_21c.value)
                 C1_d.value = parseInt(nu_20d.value) + parseInt(nu_21d.value)
                 C1_e.value = parseInt(nu_20e.value) + parseInt(nu_21e.value)
                                  
                 C1_f.value = parseInt(C1_a.value) + parseInt(C1_b.value) + parseInt(C1_c.value) + parseInt(C1_d.value) +parseInt(C1_e.value)
                 C2_f.value = parseInt(nu_22a.value) + parseInt(nu_22b.value) + parseInt(nu_22c.value) + parseInt(nu_22d.value)+ parseInt(nu_22e.value)
                 
                 C_a.value  = parseInt(C1_a.value)+ parseInt(nu_22a.value)
                 C_b.value  = parseInt(C1_b.value)+ parseInt(nu_22b.value)
                 C_c.value  = parseInt(C1_c.value)+ parseInt(nu_22c.value)
                 C_d.value  = parseInt(C1_d.value)+ parseInt(nu_22d.value)
                 C_e.value  = parseInt(C1_e.value)+ parseInt(nu_22e.value)
                 C_f.value  = parseInt(C_a.value) + parseInt(C_b.value) + parseInt(C_c.value) + parseInt(C_d.value)+ parseInt(C_e.value)
                 
                 D1_1_f.value = parseInt(nu_23a.value) + parseInt(nu_23b.value) + parseInt(nu_23c.value) + parseInt(nu_23d.value) + parseInt(nu_23e.value)
                 D1_2_f.value = parseInt(nu_24a.value) + parseInt(nu_24b.value) + parseInt(nu_24c.value) + parseInt(nu_24d.value) + parseInt(nu_24e.value)
                 
                 D1_a.value = parseInt(nu_23a.value) + parseInt(nu_24a.value)
                 D1_b.value = parseInt(nu_23b.value) + parseInt(nu_24b.value)
                 D1_c.value = parseInt(nu_23c.value) + parseInt(nu_24c.value)
                 D1_d.value = parseInt(nu_23d.value) + parseInt(nu_24d.value)
                 D1_e.value = parseInt(nu_23e.value) + parseInt(nu_24e.value)
                                  
                 D1_f.value = parseInt(D1_a.value) + parseInt(D1_b.value) + parseInt(D1_c.value) + parseInt(D1_d.value) +parseInt(D1_e.value)
                 D2_f.value = parseInt(nu_25a.value) + parseInt(nu_25b.value) + parseInt(nu_25c.value) + parseInt(nu_25d.value)+ parseInt(nu_25e.value)
                 
                 D_a.value  = parseInt(D1_a.value)+ parseInt(nu_25a.value)
                 D_b.value  = parseInt(D1_b.value)+ parseInt(nu_25b.value)
                 D_c.value  = parseInt(D1_c.value)+ parseInt(nu_25c.value)
                 D_d.value  = parseInt(D1_d.value)+ parseInt(nu_25d.value)
                 D_e.value  = parseInt(D1_e.value)+ parseInt(nu_25e.value)
                 D_f.value  = parseInt(D_a.value) + parseInt(D_b.value) + parseInt(D_c.value) + parseInt(D_d.value)+ parseInt(D_e.value)
                 
                 E1_f.value = parseInt(nu_26a.value) + parseInt(nu_26b.value) + parseInt(nu_26c.value) + parseInt(nu_26d.value) + parseInt(nu_26e.value)
                 F1_f.value = parseInt(nu_27a.value) + parseInt(nu_27b.value) + parseInt(nu_27c.value) + parseInt(nu_27d.value) + parseInt(nu_27e.value)
                 G1_f.value = parseInt(nu_28a.value) + parseInt(nu_28b.value) + parseInt(nu_28c.value) + parseInt(nu_28d.value) + parseInt(nu_28e.value)
                 G2_f.value = parseInt(nu_29a.value) + parseInt(nu_29b.value) + parseInt(nu_29c.value) + parseInt(nu_29d.value) + parseInt(nu_29e.value)
                 G3_f.value = parseInt(nu_30a.value) + parseInt(nu_30b.value) + parseInt(nu_30c.value) + parseInt(nu_30d.value) + parseInt(nu_30e.value)
                 G4_f.value = parseInt(nu_31a.value) + parseInt(nu_31b.value) + parseInt(nu_31c.value) + parseInt(nu_31d.value) + parseInt(nu_31e.value)
                 G5_f.value = parseInt(nu_32a.value) + parseInt(nu_32b.value) + parseInt(nu_32c.value) + parseInt(nu_32d.value) + parseInt(nu_32e.value)
                 H2_f.value = parseInt(nu_34a.value) + parseInt(nu_34b.value) + parseInt(nu_34c.value) + parseInt(nu_34d.value) + parseInt(nu_34e.value)
                 H3_f.value = parseInt(nu_35a.value) + parseInt(nu_35b.value) + parseInt(nu_35c.value) + parseInt(nu_35d.value) + parseInt(nu_35e.value)
                 H4_f.value = parseInt(nu_36a.value) + parseInt(nu_36b.value) + parseInt(nu_36c.value) + parseInt(nu_36d.value) + parseInt(nu_36e.value)
                 H5_f.value = parseInt(nu_37a.value) + parseInt(nu_37b.value) + parseInt(nu_37c.value) + parseInt(nu_37d.value) + parseInt(nu_37e.value)
                 
                 J1_1_1_f.value = parseInt(nu_44a.value) + parseInt(nu_44b.value) + parseInt(nu_44c.value) + parseInt(nu_44d.value) + parseInt(nu_44e.value)
                 J1_1_2_f.value = parseInt(nu_45a.value) + parseInt(nu_45b.value) + parseInt(nu_45c.value) + parseInt(nu_45d.value) + parseInt(nu_45e.value)
                 J1_2_1_f.value = parseInt(nu_46a.value) + parseInt(nu_46b.value) + parseInt(nu_46c.value) + parseInt(nu_46d.value) + parseInt(nu_46e.value)
                 J1_2_2_f.value = parseInt(nu_47a.value) + parseInt(nu_47b.value) + parseInt(nu_47c.value) + parseInt(nu_47d.value) + parseInt(nu_47e.value)
                 J2_f.value = parseInt(nu_48a.value) + parseInt(nu_48b.value) + parseInt(nu_48c.value) + parseInt(nu_48d.value) + parseInt(nu_48e.value)
                
                 J1_1_a.value = parseInt(nu_44a.value) + parseInt(nu_45a.value)
                 J1_1_b.value = parseInt(nu_44b.value) + parseInt(nu_45b.value)
                 J1_1_c.value = parseInt(nu_44c.value) + parseInt(nu_45c.value)
                 J1_1_d.value = parseInt(nu_44d.value) + parseInt(nu_45d.value)
                 J1_1_e.value = parseInt(nu_44e.value) + parseInt(nu_45e.value)
                 
                 J1_2_a.value = parseInt(nu_46a.value) + parseInt(nu_47a.value)
                 J1_2_b.value = parseInt(nu_46b.value) + parseInt(nu_47b.value)
                 J1_2_c.value = parseInt(nu_46c.value) + parseInt(nu_47c.value)
                 J1_2_d.value = parseInt(nu_46d.value) + parseInt(nu_47d.value)
                 J1_2_e.value = parseInt(nu_46e.value) + parseInt(nu_47e.value)   
                 
                 J1_1_f.value = parseInt(J1_1_1_f.value) + parseInt(J1_1_2_f.value)
                 J1_2_f.value = parseInt(J1_2_1_f.value) + parseInt(J1_2_2_f.value)
                 
                 J1_a.value = parseInt(J1_1_a.value) + parseInt(J1_2_a.value)
                 J1_b.value = parseInt(J1_1_b.value) + parseInt(J1_2_b.value)
                 J1_c.value = parseInt(J1_1_c.value) + parseInt(J1_2_c.value)
                 J1_d.value = parseInt(J1_1_d.value) + parseInt(J1_2_d.value)
                 J1_e.value = parseInt(J1_1_e.value) + parseInt(J1_2_e.value)
                 J1_f.value = parseInt(J1_1_f.value) + parseInt(J1_2_e.value)
                 
                 K1_f.value = parseInt(nu_49a.value) + parseInt(nu_49b.value) + parseInt(nu_49c.value) + parseInt(nu_49d.value) + parseInt(nu_49e.value)
                 K2_f.value = parseInt(nu_50a.value) + parseInt(nu_50b.value) + parseInt(nu_50c.value) + parseInt(nu_50d.value) + parseInt(nu_50e.value)
                 K3_f.value = parseInt(nu_51a.value) + parseInt(nu_51b.value) + parseInt(nu_51c.value) + parseInt(nu_51d.value) + parseInt(nu_51e.value)
                 L1_f.value = parseInt(nu_52a.value)
                 
                 M1_1_f.value = parseInt(nu_53a.value) + parseInt(nu_53b.value) + parseInt(nu_53c.value) + parseInt(nu_53d.value) + parseInt(nu_53e.value)
                 M1_2_f.value = parseInt(nu_54a.value) + parseInt(nu_54b.value) + parseInt(nu_54c.value) + parseInt(nu_54d.value) + parseInt(nu_54e.value)
               
                 M1_a.value = parseInt(nu_53a.value) + parseInt(nu_54a.value)
                 M1_b.value = parseInt(nu_53b.value) + parseInt(nu_54b.value)
                 M1_c.value = parseInt(nu_53c.value) + parseInt(nu_54c.value)
                 M1_d.value = parseInt(nu_53d.value) + parseInt(nu_54d.value)
                 M1_e.value = parseInt(nu_53e.value) + parseInt(nu_54e.value) 
                 M1_f.value = parseInt(M1_1_f.value) + parseInt(M1_2_f.value)
                 
                 N1_1_f.value = parseInt(nu_55a.value) + parseInt(nu_55b.value) + parseInt(nu_55c.value) + parseInt(nu_55d.value) + parseInt(nu_55e.value)
                 N1_2_f.value = parseInt(nu_56a.value) + parseInt(nu_56b.value) + parseInt(nu_56c.value) + parseInt(nu_56d.value) + parseInt(nu_56e.value)
               
                 N1_a.value = parseInt(nu_55a.value) + parseInt(nu_56a.value)
                 N1_b.value = parseInt(nu_55b.value) + parseInt(nu_56b.value)
                 N1_c.value = parseInt(nu_55c.value) + parseInt(nu_56c.value)
                 N1_d.value = parseInt(nu_55d.value) + parseInt(nu_56d.value)
                 N1_e.value = parseInt(nu_55e.value) + parseInt(nu_56e.value) 
                 N1_f.value = parseInt(N1_1_f.value) + parseInt(N1_2_f.value)
                 
                 N2_f.value = parseInt(nu_57a.value) + parseInt(nu_57b.value) + parseInt(nu_57c.value) + parseInt(nu_57d.value) + parseInt(nu_57e.value)
                 
                 O1_1_f.value = parseInt(nu_58a.value) + parseInt(nu_58b.value) + parseInt(nu_58c.value) + parseInt(nu_58d.value) + parseInt(nu_58e.value)
                 O1_2_f.value = parseInt(nu_59a.value) + parseInt(nu_59b.value) + parseInt(nu_59c.value) + parseInt(nu_59d.value) + parseInt(nu_59e.value)
               
                 O1_a.value = parseInt(nu_58a.value) + parseInt(nu_59a.value)
                 O1_b.value = parseInt(nu_58b.value) + parseInt(nu_59b.value)
                 O1_c.value = parseInt(nu_58c.value) + parseInt(nu_59c.value)
                 O1_d.value = parseInt(nu_58d.value) + parseInt(nu_59d.value)
                 O1_e.value = parseInt(nu_58e.value) + parseInt(nu_59e.value) 
                 O1_f.value = parseInt(O1_1_f.value) + parseInt(O1_2_f.value)
                 
                 P1_f.value = parseInt(nu_60a.value) + parseInt(nu_60b.value) + parseInt(nu_60c.value) + parseInt(nu_60d.value) + parseInt(nu_60e.value)
                 Q1_f.value = parseInt(nu_61a.value) + parseInt(nu_61b.value) + parseInt(nu_61c.value) + parseInt(nu_61d.value) + parseInt(nu_61e.value)
                 R1_f.value = parseInt(nu_62a.value) + parseInt(nu_62b.value) + parseInt(nu_62c.value) + parseInt(nu_62d.value) + parseInt(nu_62e.value)
                 
                 S1_1_f_F.value = parseInt(nu_75a.value) + parseInt(nu_75c.value) + parseInt(nu_75e.value) + parseInt(nu_75g.value) + parseInt(nu_75i.value) + parseInt(nu_75k.value) + parseInt(nu_75m.value) + parseInt(nu_75o.value)
                 S1_1_f_M.value = parseInt(nu_75b.value) + parseInt(nu_75d.value) + parseInt(nu_75f.value) + parseInt(nu_75h.value) + parseInt(nu_75j.value) + parseInt(nu_75l.value) + parseInt(nu_75n.value) + parseInt(nu_75p.value)
                 S1_1_f_T.value = parseInt(S1_1_f_F.value) + parseInt(S1_1_f_M.value)
                 
                 S1_2_f_F.value = parseInt(nu_76a.value) + parseInt(nu_76c.value) + parseInt(nu_76e.value) + parseInt(nu_76g.value) + parseInt(nu_76i.value) + parseInt(nu_76k.value) + parseInt(nu_76m.value) + parseInt(nu_76o.value)
                 S1_2_f_M.value = parseInt(nu_76b.value) + parseInt(nu_76d.value) + parseInt(nu_76f.value) + parseInt(nu_76h.value) + parseInt(nu_76j.value) + parseInt(nu_76l.value) + parseInt(nu_76n.value) + parseInt(nu_76p.value)
                 S1_2_f_T.value = parseInt(S1_2_f_F.value) + parseInt(S1_2_f_M.value)
                 
                 S1_3_f_F.value = parseInt(nu_77a.value) + parseInt(nu_77c.value) + parseInt(nu_77e.value) + parseInt(nu_77g.value) + parseInt(nu_77i.value) + parseInt(nu_77k.value) + parseInt(nu_77m.value) + parseInt(nu_77o.value)
                 S1_3_f_M.value = parseInt(nu_77b.value) + parseInt(nu_77d.value) + parseInt(nu_77f.value) + parseInt(nu_77h.value) + parseInt(nu_77j.value) + parseInt(nu_77l.value) + parseInt(nu_77n.value) + parseInt(nu_77p.value)
                 S1_3_f_T.value = parseInt(S1_3_f_F.value) + parseInt(S1_3_f_M.value)
                 
                 S1_4_f_F.value = parseInt(nu_78a.value) + parseInt(nu_78c.value) + parseInt(nu_78e.value) + parseInt(nu_78g.value) + parseInt(nu_78i.value) + parseInt(nu_78k.value) + parseInt(nu_78m.value) + parseInt(nu_78o.value)
                 S1_4_f_M.value = parseInt(nu_78b.value) + parseInt(nu_78d.value) + parseInt(nu_78f.value) + parseInt(nu_78h.value) + parseInt(nu_78j.value) + parseInt(nu_78l.value) + parseInt(nu_78n.value) + parseInt(nu_78p.value)
                 S1_4_f_T.value = parseInt(S1_4_f_F.value) + parseInt(S1_4_f_M.value)
                 
                 S2_1_f_F.value = parseInt(nu_79a.value) + parseInt(nu_79c.value) + parseInt(nu_79e.value) + parseInt(nu_79g.value) + parseInt(nu_79i.value) + parseInt(nu_79k.value) + parseInt(nu_79m.value) + parseInt(nu_79o.value)
                 S2_1_f_M.value = parseInt(nu_79b.value) + parseInt(nu_79d.value) + parseInt(nu_79f.value) + parseInt(nu_79h.value) + parseInt(nu_79j.value) + parseInt(nu_79l.value) + parseInt(nu_79n.value) + parseInt(nu_79p.value)
                 S2_1_f_T.value = parseInt(S2_1_f_F.value) + parseInt(S2_1_f_M.value)
                 
                 S2_2_f_F.value = parseInt(nu_80a.value) + parseInt(nu_80c.value) + parseInt(nu_80e.value) + parseInt(nu_80g.value) + parseInt(nu_80i.value) + parseInt(nu_80k.value) + parseInt(nu_80m.value) + parseInt(nu_80o.value)
                 S2_2_f_M.value = parseInt(nu_80b.value) + parseInt(nu_80d.value) + parseInt(nu_80f.value) + parseInt(nu_80h.value) + parseInt(nu_80j.value) + parseInt(nu_80l.value) + parseInt(nu_80n.value) + parseInt(nu_80p.value)
                 S2_2_f_T.value = parseInt(S2_2_f_F.value) + parseInt(S2_2_f_M.value)
                 
                 S1_a.value = parseInt(nu_75a.value) + parseInt(nu_76a.value) + parseInt(nu_77a.value) + parseInt(nu_78a.value) 
                 S1_b.value = parseInt(nu_75b.value) + parseInt(nu_76b.value) + parseInt(nu_77b.value) + parseInt(nu_78b.value)
                 S1_c.value = parseInt(nu_75c.value) + parseInt(nu_76c.value) + parseInt(nu_77c.value) + parseInt(nu_78c.value) 
                 S1_d.value = parseInt(nu_75d.value) + parseInt(nu_76d.value) + parseInt(nu_77d.value) + parseInt(nu_78d.value)
                 S1_e.value = parseInt(nu_75e.value) + parseInt(nu_76e.value) + parseInt(nu_77e.value) + parseInt(nu_78e.value) 
                 S1_f.value = parseInt(nu_75f.value) + parseInt(nu_76f.value) + parseInt(nu_77f.value) + parseInt(nu_78f.value)
                 S1_g.value = parseInt(nu_75g.value) + parseInt(nu_76g.value) + parseInt(nu_77g.value) + parseInt(nu_78g.value) 
                 S1_h.value = parseInt(nu_75h.value) + parseInt(nu_76h.value) + parseInt(nu_77h.value) + parseInt(nu_78h.value)
                 S1_i.value = parseInt(nu_75i.value) + parseInt(nu_76i.value) + parseInt(nu_77i.value) + parseInt(nu_78i.value) 
                 S1_j.value = parseInt(nu_75j.value) + parseInt(nu_76j.value) + parseInt(nu_77j.value) + parseInt(nu_78j.value)
                 S1_k.value = parseInt(nu_75k.value) + parseInt(nu_76k.value) + parseInt(nu_77k.value) + parseInt(nu_78k.value) 
                 S1_l.value = parseInt(nu_75l.value) + parseInt(nu_76l.value) + parseInt(nu_77l.value) + parseInt(nu_78l.value)
                 S1_m.value = parseInt(nu_75m.value) + parseInt(nu_76m.value) + parseInt(nu_77m.value) + parseInt(nu_78m.value) 
                 S1_n.value = parseInt(nu_75n.value) + parseInt(nu_76n.value) + parseInt(nu_77n.value) + parseInt(nu_78n.value)
                 S1_o.value = parseInt(nu_75o.value) + parseInt(nu_76o.value) + parseInt(nu_77o.value) + parseInt(nu_78o.value) 
                 S1_p.value = parseInt(nu_75p.value) + parseInt(nu_76p.value) + parseInt(nu_77p.value) + parseInt(nu_78p.value)
                 S1_q.value = parseInt(S1_a.value) + parseInt(S1_c.value) + parseInt(S1_e.value) + parseInt(S1_g.value) + parseInt(S1_i.value) + parseInt(S1_k.value) + parseInt(S1_m.value) + parseInt(S1_o.value)
                 S1_r.value = parseInt(S1_b.value) + parseInt(S1_d.value) + parseInt(S1_f.value) + parseInt(S1_h.value) + parseInt(S1_j.value) + parseInt(S1_l.value) + parseInt(S1_n.value) + parseInt(S1_p.value)
                 S1_s.value = parseInt(S1_q.value) + parseInt(S1_r.value)
                 
                 S2_a.value = parseInt(nu_79a.value) + parseInt(nu_80a.value)
                 S2_b.value = parseInt(nu_79b.value) + parseInt(nu_80b.value)
                 S2_c.value = parseInt(nu_79c.value) + parseInt(nu_80c.value)
                 S2_d.value = parseInt(nu_79d.value) + parseInt(nu_80d.value)
                 S2_e.value = parseInt(nu_79e.value) + parseInt(nu_80e.value)
                 S2_f.value = parseInt(nu_79f.value) + parseInt(nu_80f.value)
                 S2_g.value = parseInt(nu_79g.value) + parseInt(nu_80g.value)
                 S2_h.value = parseInt(nu_79h.value) + parseInt(nu_80h.value)
                 S2_i.value = parseInt(nu_79i.value) + parseInt(nu_80i.value)
                 S2_j.value = parseInt(nu_79j.value) + parseInt(nu_80j.value)
                 S2_k.value = parseInt(nu_79k.value) + parseInt(nu_80k.value)
                 S2_l.value = parseInt(nu_79l.value) + parseInt(nu_80l.value)
                 S2_m.value = parseInt(nu_79m.value) + parseInt(nu_80m.value)
                 S2_n.value = parseInt(nu_79n.value) + parseInt(nu_80n.value)
                 S2_o.value = parseInt(nu_79o.value) + parseInt(nu_80o.value)
                 S2_p.value = parseInt(nu_79p.value) + parseInt(nu_80p.value)
                 S2_q.value = parseInt(S2_a.value) + parseInt(S2_c.value) + parseInt(S2_e.value) + parseInt(S2_g.value) + parseInt(S2_i.value) + parseInt(S2_k.value) + parseInt(S2_m.value) + parseInt(S2_o.value)
                 S2_r.value = parseInt(S2_b.value) + parseInt(S2_d.value) + parseInt(S2_f.value) + parseInt(S2_h.value) + parseInt(S2_j.value) + parseInt(S2_l.value) + parseInt(S2_n.value) + parseInt(S2_p.value)
                 S2_s.value = parseInt(S2_q.value) + parseInt(S2_r.value)
                 
                 A2_g.value  = ( parseInt(A2_f.value) / parseInt(A1_f.value)*100 ).toFixed(2)
                 A3_g.value  = ( parseInt(A3_f.value) / parseInt(A2_f.value)*100 ).toFixed(2)
                 A4_g.value  = ( parseInt(A4_f.value) / parseInt(A3_f.value)*100 ).toFixed(2)
                 A6_g.value  = ( parseInt(nu_05f.value) / parseInt(A5_f.value)*100 ).toFixed(2)
                 A7_g.value  = ( parseInt(nu_06f.value) / parseInt(nu_05f.value)*100 ).toFixed(2)
                 A10_g.value = ( parseInt(nu_09f.value) / parseInt(nu_08f.value)*100 ).toFixed(2)
    ">

    <div class="container">
       
        <div>
             <fieldset>
                    <legend>Acciones</legend>
           
                    <input type="button" id="btngrabar" value="Grabar" onclick="validateFields();"/>
                    <label></label>
                    <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
                    <label></label>
                    <input type="button" class="btnPrint" name="btnPrint" id="btnPrint" value="Imprimir" onclick="javascript:window.print()" />
                    <label></label>
                    <input type="button" value="Nuevo" onclick="javascript:document.getElementById('task').value = 'newAction'; document.getElementById('frmPct').submit();"/>
             </fieldset>
             
        </div>
        <div>&nbsp;</div>       
        <div class="elegant-aero">
                        <input style="font-size: 12px;" placeholder="Personal de Salud" type="text" name="encuestador" id="encuestador" size="60" maxlength="250" value="<?php echo $this->inftbc->encuestador_name; ?>" required autofocus/>
                        <input type="hidden" name="nu_dni" id="nu_dni" value="<?php echo $this->inftbc->nu_dni; ?>" required autofocus/>
                        <input style="font-size: 12px;" placeholder="Establecimiento de Salud" type="text" name="establec" id="establec" size="100" maxlength="250" value="<?php echo $this->inftbc->establec_name; ?>" required autofocus/>
                        <input type="hidden" name="cod_2000" id="cod_2000" value="<?php echo $this->inftbc->cod_2000; ?>" required/>
                        <table>
                            <tr>
                                <td><input class="text" style="font-size: 12px; width: 130px;" placeholder="Población asignada" maxlength="6" type="text" name="nu_pob" id="nu_pob"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_pob; ?>"/></td>
                                <td style="font-size: 12px;"><?php echo $this->lists['resultado_anho']; ?></td>
                                <td style="font-size: 12px;"><?php echo $this->lists['resultado_mes']; ?></td>                                 
                            </tr>
                        </table>             
        </div>
        <div>
                <section class="tabs">
                        <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1">Actividades 1</label>
                        
                        <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2">Actividades 2</label>

                        <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3"/>
		        <label for="tab-3" class="tab-label-3">Actividades 3</label>
                        
                        <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
		        <label for="tab-4" class="tab-label-4">Casos Nuevos</label>
                        <div class="clear-shadow"></div>
			
		        <div class="content">
			   <div class="content-1">
			      <div class="clear-shadow"></div>
                                <table id="gradient-style" summary="tabla_actividades">
                                    <thead>
                                        <tr>
                                            <th  style="background: #F2CA85;">Total de Atenciones en Mayores de 15 años</th>
<!--                                        <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>-->
                                            <th colspan="7" style="background: #F2CA85;"><input type="text" maxlength="6" style="width:64px;" placeholder="ATC" name="nu_00a"  id="nu_00a" onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_00a; ?>"/></th>
                                            <!--<th></th>-->
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>

                                            <th scope="col" width="80%">A. DETECCION Y DIAGNOSTICO DE CASOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>    
                                            <td>A1.S.R. Esperados = Atenciones en > 15 años x 0.05</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><output name="A1_f"></output></td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>A2.S.R. Identificados</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_01a" id="nu_01a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_01a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_01b" id="nu_01b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_01b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_01c" id="nu_01c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_01c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_01d" id="nu_01d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_01d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_01e" id="nu_01e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_01e; ?>"/></td>
                                            <td><output name="A2_f"></output></td>
                                            <td><output name="A2_g"></output></td>
                                        </tr>
                                        <tr><td>A3.S.R. Examinados</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_02a" id="nu_02a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_02a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_02b" id="nu_02b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_02b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_02c" id="nu_02c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_02c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_02d" id="nu_02d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_02d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_02e" id="nu_02e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_02e; ?>"/></td>
                                            <td><output name="A3_f"></output></td>
                                            <td><output name="A3_g"></output></td> 
                                        </tr>
                                        <tr><td>A4.S.R. Diagnosticados con TB Pulmonar baciloscopía positiva</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_03a" id="nu_03a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_03a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_03b" id="nu_03b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_03b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_03c" id="nu_03c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_03c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_03d" id="nu_03d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_03d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_03e" id="nu_03e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_03e; ?>"/></td>
                                            <td><output name="A4_f"></output></td>
                                            <td><output name="A4_g"></output></td>
                                        </tr>
                                        <tr>
                                            <td>A5.   Baciloscopías de Diagnóstico esperadas (A1 x 2)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><output name="A5_f"></output></td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>A6.   Baciloscopías de Diagnóstico Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="4" type="text" name="nu_05f" id="nu_05f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_05f; ?>"/></td>
                                            <td><output name="A6_g"></output></td>
                                        </tr>  
                                        <tr>
                                            <td>A7.   Baciloscopías de Diagnóstico BK (+)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_06f" id="nu_06f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_06f; ?>"/></td>
                                            <td><output name="A7_g"></output></td>
                                        </tr>
                                        <tr>
                                            <td>A8.   Baciloscopías de Control Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_07f" id="nu_07f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_07f; ?>"/></td>
                                            <td></td>
                                        </tr> 
                                        <tr>
                                            <td>A9.   Cultivos de Diagnóstico Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="4" type="text" name="nu_08f" id="nu_08f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_08f; ?>"/></td>
                                            <td>100</td>
                                        </tr> 						
                                        <tr>
                                            <td>A10. Cultivos de Diagnóstico Positivos</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_09f" id="nu_09f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_09f; ?>"/></td>
                                            <td><output name="A10_g"></output></td>
                                        </tr>
                                        <tr>
                                            <td>A11. Cultivos de Control Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_10f" id="nu_10f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_10f; ?>"/></td>
                                            <td></td>
                                        </tr> 						
                                        <tr>
                                            <td class="n2">A12. Nº de Pruebas de Sensibilidad realizadas	</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"><output name="A12_f"></output></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td>A12.1 Nº de Pruebas de Sensibilidad Rápidas (H y R)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_12f" id="nu_12f" onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_12f; ?>"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>A12.2 Nº de Pruebas de Sensibilidad Convencional</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_13f" id="nu_13f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_13f; ?>"/></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col">B. CASOS NUEVOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2">Total de Casos Nuevos (B1+B2)</td>
                                            <td class="n2"><output name="B_a"></output></td>
                                            <td class="n2"><output name="B_b"></output></td>
                                            <td class="n2"><output name="B_c"></output></td>
                                            <td class="n2"><output name="B_d"></output></td>
                                            <td class="n2"><output name="B_e"></output></td>
                                            <td class="n2"><output name="B_f"></output></td>
                                            <td class="n2"><output name="B_g"></output></td>
                                        </tr>
                                        <tr>
                                            <td class="n3">B1. TB Pulmonar Total (B1.1 +B1.2 + B1.3 + B1.4)</td>
                                            <td class="n3"><output name="B1_a"></output></td>
                                            <td class="n3"><output name="B1_b"></output></td>
                                            <td class="n3"><output name="B1_c"></output></td>
                                            <td class="n3"><output name="B1_d"></output></td>
                                            <td class="n3"><output name="B1_e"></output></td>
                                            <td class="n3"><output name="B1_f"></output></td>
                                            <td class="n3"><output name="B1_g"></output></td>
                                        </tr>
                                        <tr><td>        B1.1 TB Pulmonar frotis positivo.</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_14a" id="nu_14a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_14a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_14b" id="nu_14b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_14b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_14c" id="nu_14c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_14c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_14d" id="nu_14d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_14d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_14e" id="nu_14e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_14e; ?>"/></td>
                                            <td><output name="B1_1_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr><td>        B1.2 TB Pulmonar cultivo positivo.</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_15a" id="nu_15a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_15a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_15b" id="nu_15b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_15b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_15c" id="nu_15c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_15c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_15d" id="nu_15d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_15d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_15e" id="nu_15e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_15e; ?>"/></td>
                                            <td><output name="B1_2_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>        B1.3 TB Pulmonar frotis negativo.</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_16a" id="nu_16a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_16a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_16b" id="nu_16b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_16b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_16c" id="nu_16c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_16c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_16d" id="nu_16d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_16d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_16e" id="nu_16e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_16e; ?>"/></td>
                                            <td><output name="B1_3_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>        B1.4 TB Pulmonar sin frotis de esputo.</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_17a" id="nu_17a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_17a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_17b" id="nu_17b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_17b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_17c" id="nu_17c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_17c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_17d" id="nu_17d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_17d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_17e" id="nu_17e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_17e; ?>"/></td>
                                            <td><output name="B1_4_f"></output></td>
                                            <td></td>
                                        </tr>  
                                        <tr>
                                            <td class="n3">B2. TB Extrapulmonar (B2.1 +B2.2)</td>
                                            <td class="n3"><output name="B2_a"></output></td>
                                            <td class="n3"><output name="B2_b"></output></td>
                                            <td class="n3"><output name="B2_c"></output></td>
                                            <td class="n3"><output name="B2_d"></output></td>
                                            <td class="n3"><output name="B2_e"></output></td>
                                            <td class="n3"><output name="B2_f"></output></td>
                                            <td class="n3"><output name="B2_g"></output></td>
                                        </tr>
                                        <tr>
                                            <td>B2.1 Con confirmación bacteriológica o histopatológica</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_18a" id="nu_18a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_18a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_18b" id="nu_18b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_18b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_18c" id="nu_18c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_18c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_18d" id="nu_18d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_18d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_18e" id="nu_18e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_18e; ?>"/></td>
                                            <td><output name="B2_1_f"></output></td>
                                            <td></td>
                                        </tr> 
                                        <tr>
                                            <td> B2.2 Sin confirmación bacteriológica o histopatológica</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_19a" id="nu_19a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_19a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_19b" id="nu_19b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_19b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_19c" id="nu_19c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_19c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_19d" id="nu_19d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_19d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_19e" id="nu_19e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_19e; ?>"/></td>
                                            <td><output name="B2_2_f"></output></td>
                                            <td></td>
                                        </tr>                
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col">C. RECAÍDAS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2">RECAIDAS (C1 + C2)</td>
                                            <td class="n2"><output name="C_a"></output></td>
                                            <td class="n2"><output name="C_b"></output></td>
                                            <td class="n2"><output name="C_c"></output></td>
                                            <td class="n2"><output name="C_d"></output></td>
                                            <td class="n2"><output name="C_e"></output></td>
                                            <td class="n2"><output name="C_f"></output></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td class="n3">C1. Recaidas Pulmonar (C1.1 + C1.2)</td>
                                            <td class="n3"><output name="C1_a"></output></td>
                                            <td class="n3"><output name="C1_b"></output></td>
                                            <td class="n3"><output name="C1_c"></output></td>
                                            <td class="n3"><output name="C1_d"></output></td>
                                            <td class="n3"><output name="C1_e"></output></td>
                                            <td class="n3"><output name="C1_f"></output></td>
                                            <td class="n3"></td>
                                        </tr>
                                        <tr>
                                            <td>C1.1 TB Pulmonar frotis positivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_20a" id="nu_20a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_20a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_20b" id="nu_20b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_20b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_20c" id="nu_20c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_20c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_20d" id="nu_20d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_20d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_20e" id="nu_20e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_20e; ?>"/></td>
                                            <td><output name="C1_1_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>C1.2 TB Pulmonar frotis negativo </td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_21a" id="nu_21a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_21a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_21b" id="nu_21b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_21b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_21c" id="nu_21c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_21c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_21d" id="nu_21d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_21d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_21e" id="nu_21e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_21e; ?>"/></td>
                                            <td><output name="C1_2_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="n3">C2 Recaídas Extrapulmonares</td>
                                            <td class="n3"><input class="text" maxlength="3" type="text" name="nu_22a" id="nu_22a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_22a; ?>"/></td>
                                            <td class="n3"><input class="text" maxlength="3" type="text" name="nu_22b" id="nu_22b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_22b; ?>"/></td>
                                            <td class="n3"><input class="text" maxlength="3" type="text" name="nu_22c" id="nu_22c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_22c; ?>"/></td>
                                            <td class="n3"><input class="text" maxlength="3" type="text" name="nu_22d" id="nu_22d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_22d; ?>"/></td>
                                            <td class="n3"><input class="text" maxlength="3" type="text" name="nu_22e" id="nu_22e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_22e; ?>"/></td>
                                            <td class="n3"><output name="C2_f"></output></td>
                                            <td class="n3"></td>
                                        </tr>
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col">D. ABANDONOS RECUPERADOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2">Abandonos Recuperados (D1+D2)</td>
                                            <td class="n2"><output name="D_a"></output></td>
                                            <td class="n2"><output name="D_b"></output></td>
                                            <td class="n2"><output name="D_c"></output></td>
                                            <td class="n2"><output name="D_d"></output></td>
                                            <td class="n2"><output name="D_e"></output></td>
                                            <td class="n2"><output name="D_f"></output></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td class="n3">D1. Abandonos recuperados pulmonar (D1.1+D1.2)</td>
                                            <td class="n3"><output name="D1_a"></output></td>
                                            <td class="n3"><output name="D1_b"></output></td>
                                            <td class="n3"><output name="D1_c"></output></td>
                                            <td class="n3"><output name="D1_d"></output></td>
                                            <td class="n3"><output name="D1_e"></output></td>
                                            <td class="n3"><output name="D1_f"></output></td>
                                            <td class="n3"></td>
                                        </tr>
                                        <tr>
                                            <td>      D1.1 TB Pulmonar frotis positivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_23a" id="nu_23a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_23a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_23b" id="nu_23b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_23b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_23c" id="nu_23c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_23c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_23d" id="nu_23d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_23d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_23e" id="nu_23e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_23e; ?>"/></td>
                                            <td><output name="D1_1_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>    D1.2 TB Pulmonar frotis negativo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_24a" id="nu_24a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_24a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_24b" id="nu_24b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_24b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_24c" id="nu_24c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_24c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_24d" id="nu_24d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_24d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_24e" id="nu_24e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_24e; ?>"/></td>
                                            <td><output name="D1_2_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="n3">D2. Abandonos Recuperados  Extrapulmonares</td>
                                            <td class="n3"><input class="text" maxlength="3" type="text" name="nu_25a" id="nu_25a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_25a; ?>"/></td>
                                            <td class="n3"><input class="text" maxlength="3" type="text" name="nu_25b" id="nu_25b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_25b; ?>"/></td>
                                            <td class="n3"><input class="text" maxlength="3" type="text" name="nu_25c" id="nu_25c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_25c; ?>"/></td>
                                            <td class="n3"><input class="text" maxlength="3" type="text" name="nu_25d" id="nu_25d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_25d; ?>"/></td>
                                            <td class="n3"><input class="text" maxlength="3" type="text" name="nu_25e" id="nu_25e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_25e; ?>"/></td>
                                            <td class="n3"><output name="D2_f"></output></td>
                                            <td class="n3"></td>
                                        </tr>
                                    </tbody>
                                </table>
                           </div>
			   <div class="content-2">
			      <div class="clear-shadow"></div>
                                <table id="gradient-style" summary="tabla_actividades">
                                    <thead>                
                                        <tr>
                                            <th scope="col">E. FRACASOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>     E1. Total de casos que fracasan a esquema con medicamentos de primera línea</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_26a" id="nu_26a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_26a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_26b" id="nu_26b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_26b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_26c" id="nu_26c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_26c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_26d" id="nu_26d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_26d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_26e" id="nu_26e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_26e; ?>"/></td>
                                            <td><output name="E1_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">F.  MORBILIDAD TOTAL</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>F1. Total de personas afectadas con tuberculosis</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_27a" id="nu_27a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_27a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_27b" id="nu_27b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_27b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_27c" id="nu_27c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_27c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_27d" id="nu_27d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_27d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_27e" id="nu_27e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_27e; ?>"/></td>
                                            <td><output name="F1_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">G.  CASOS DE TB CON RESISTENCIA A MEDICAMENTOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>G1. Casos nuevos y antes tratados de Otras Tuberculosis Drogo Resistente</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_28a" id="nu_28a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_28a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_28b" id="nu_28b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_28b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_28c" id="nu_28c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_28c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_28d" id="nu_28d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_28d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_28e" id="nu_28e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_28e; ?>"/></td>
                                            <td><output name="G1_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>G2. Casos nuevos con TBMDR confirmada</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_29a" id="nu_29a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_29a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_29b" id="nu_29b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_29b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_29c" id="nu_29c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_29c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_29d" id="nu_29d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_29d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_29e" id="nu_29e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_29e; ?>"/></td>
                                            <td><output name="G2_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>G3. Casos antes tratados con TBMDR confirmada</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_30a" id="nu_30a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_30a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_30b" id="nu_30b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_30b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_30c" id="nu_30c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_30c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_30d" id="nu_30d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_30d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_30e" id="nu_30e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_30e; ?>"/></td>
                                            <td><output name="G3_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>G4. Casos nuevos con TB XDR confirmada</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_31a" id="nu_31a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_31a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_31b" id="nu_31b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_31b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_31c" id="nu_31c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_31c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_31d" id="nu_31d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_31d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_31e" id="nu_31e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_31e; ?>"/></td>
                                            <td><output name="G4_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>G5. Casos antes tratados con TB XDR confirmada</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_32a" id="nu_32a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_32a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_32b" id="nu_32b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_32b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_32c" id="nu_32c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_32c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_32d" id="nu_32d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_32d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_32e" id="nu_32e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_32e; ?>"/></td>
                                            <td><output name="G5_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">H.  ESTUDIO DE CONTACTOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>H1. Contactos Esperados (Morbilidad x 4)</td>
                                            <td></td>
                                            <td></td> 
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>H2. Contactos Censados</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_34a" id="nu_34a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_34a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_34b" id="nu_34b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_34b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_34c" id="nu_34c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_34c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_34d" id="nu_34d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_34d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_34e" id="nu_34e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_34e; ?>"/></td>
                                            <td><output name="H2_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>H3. Contactos Examinados</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_35a" id="nu_35a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_35a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_35b" id="nu_35b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_35b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_35c" id="nu_35c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_35c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_35d" id="nu_35d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_35d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_35e" id="nu_35e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_35e; ?>"/></td>
                                            <td><output name="H3_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>H4. Contactos Examinados con TB</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_36a" id="nu_36a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_36a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_36b" id="nu_36b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_36b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_36c" id="nu_36c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_36c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_36d" id="nu_36d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_36d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_36e" id="nu_36e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_36e; ?>"/></td>
                                            <td><output name="H4_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>H5. Contactos Examinados con TB pulmonar frotis positivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_37a" id="nu_37a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_37a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_37b" id="nu_37b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_37b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_37c" id="nu_37c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_37c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_37d" id="nu_37d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_37d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_37e" id="nu_37e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_37e; ?>"/></td>
                                            <td><output name="H5_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">I.  TERAPIA PREVENTIVA (TPI-TPC)</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>I1. Contactos Censados < 5 años de pacientes con TBP</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_38f" id="nu_38f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_38f; ?>"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>I2. Contactos Examinados < 5 años de pacientes con TBP</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_39f" id="nu_39f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_39f; ?>"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>I3. Nº de Contactos < 5 años con Terapia Preventiva con Isoniacida (TPI)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_40f" id="nu_40f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_40f; ?>"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> I4. Nº de personas con VIH positivo</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_41f" id="nu_41f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_41f; ?>"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> I5. N° de personas con VIH que reciben Terapia Preventiva con Isoniacida (TPI)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_42f" id="nu_42f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_42f; ?>"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> I6. N° de personas con TB-VIH que reciben Terapia Preventiva con Cotrimoxazol (TPC)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_43f" id="nu_43f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_43f; ?>"/></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">J.  COINFECCIÓN TB-VIH</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2">J1. Total de Casos TB-VIH (J1.1+J1.2)</td>
                                            <td class="n2"><output name="J1_a"></output></td>
                                            <td class="n2"><output name="J1_b"></output></td>
                                            <td class="n2"><output name="J1_c"></output></td>
                                            <td class="n2"><output name="J1_d"></output></td>
                                            <td class="n2"><output name="J1_e"></output></td>
                                            <td class="n2"><output name="J1_f"></output></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>    
                                            <td class="n3"> J1.1 Total de casos TB / VIH  Nuevos (J1.1.1 + J1.1.2)</td>
                                            <td class="n3"><output name="J1_1_a"></output></td>
                                            <td class="n3"><output name="J1_1_b"></output></td>
                                            <td class="n3"><output name="J1_1_c"></output></td>
                                            <td class="n3"><output name="J1_1_d"></output></td>
                                            <td class="n3"><output name="J1_1_e"></output></td>
                                            <td class="n3"><output name="J1_1_f"></output></td>
                                            <td class="n3"></td>
                                        </tr>
                                        <tr>    
                                            <td> J1.1.1 TB Pulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_44a" id="nu_44a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_44a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_44b" id="nu_44b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_44b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_44c" id="nu_44c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_44c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_44d" id="nu_44d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_44d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_44e" id="nu_44e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_44e; ?>"/></td>
                                            <td><output name="J1_1_1_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> J1.1.2 TB Extrapulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_45a" id="nu_45a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_45a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_45b" id="nu_45b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_45b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_45c" id="nu_45c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_45c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_45d" id="nu_45d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_45d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_45e" id="nu_45e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_45e; ?>"/></td>
                                            <td><output name="J1_1_2_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td class="n3"> J1.2 Total de casos TB/VIH  antes tratados (J1.2.1 + J1.2.2)</td>
                                            <td class="n3"><output name="J1_2_a"></output></td>
                                            <td class="n3"><output name="J1_2_b"></output></td>
                                            <td class="n3"><output name="J1_2_c"></output></td>
                                            <td class="n3"><output name="J1_2_d"></output></td>
                                            <td class="n3"><output name="J1_2_e"></output></td>
                                            <td class="n3"><output name="J1_2_f"></output></td>
                                            <td class="n3"></td>
                                        </tr>
                                        <tr>    
                                            <td>J1.2.1 TB Pulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_46a" id="nu_46a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_46a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_46b" id="nu_46b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_46b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_46c" id="nu_46c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_46c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_46d" id="nu_46d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_46d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_46e" id="nu_46e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_46e; ?>"/></td>
                                            <td><output name="J1_2_1_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>J1.2.2 TB Extrapulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_47a" id="nu_47a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_47a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_47b" id="nu_47b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_47b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_47c" id="nu_47c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_47c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_47d" id="nu_47d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_47d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_47e" id="nu_47e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_47e; ?>"/></td>
                                            <td><output name="J1_2_2_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td class="n2">J2. Total de casos TB/VIH que reciben TARGA </td>
                                            <td class="n2"><input class="text" maxlength="3" type="text" name="nu_48a" id="nu_48a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_48a; ?>"/></td>
                                            <td class="n2"><input class="text" maxlength="3" type="text" name="nu_48b" id="nu_48b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_48b; ?>"/></td>
                                            <td class="n2"><input class="text" maxlength="3" type="text" name="nu_48c" id="nu_48c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_48c; ?>"/></td>
                                            <td class="n2"><input class="text" maxlength="3" type="text" name="nu_48d" id="nu_48d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_48d; ?>"/></td>
                                            <td class="n2"><input class="text" maxlength="3" type="text" name="nu_48e" id="nu_48e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_48e; ?>"/></td>
                                            <td class="n2"><output name="J2_f"></output></td>
                                            <td class="n2"></td>
                                        </tr>
                                    </tbody>
                                </table>
                           </div>
			   <div class="content-3">
			      <div class="clear-shadow"></div>
                                <table id="gradient-style" summary="tabla_actividades">
                                    <thead>                
                                        <tr>
                                            <th scope="col">K.  TAMIZAJE DE VIH EN PACIETNES CON TB</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>K1. Total de casos que recibieron consejeria pre test para VIH</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_49a" id="nu_49a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_49a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_49b" id="nu_49b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_49b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_49c" id="nu_49c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_49c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_49d" id="nu_49d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_49d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_49e" id="nu_49e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_49e; ?>"/></td>
                                            <td><output name="K1_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>K2. Total de casos que cuentan con resultado de tamizaje de VIH durante el tratamiento</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_50a" id="nu_50a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_50a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_50b" id="nu_50b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_50b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_50c" id="nu_50c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_50c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_50d" id="nu_50d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_50d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_50e" id="nu_50e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_50e; ?>"/></td>
                                            <td><output name="K2_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>K3. Total de casos que cuentan con resultado de VIH reactivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_51a" id="nu_51a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_51a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_51b" id="nu_51b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_51b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_51c" id="nu_51c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_51c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_51d" id="nu_51d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_51d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_51e" id="nu_51e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_51e; ?>"/></td>
                                            <td><output name="K3_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">L.  MENINGITIS TB EN MENORES DE 5 AÑOS</th>
                                            <th scope="col">menores 5 años</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>L1. N° casos de meningitis TB  en < de 5 años</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_52a" id="nu_52a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_52a; ?>"/></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><output name="L1_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">M.  GESTANTES CON TUBERCULOSIS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>                            
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2">M1. N° de Gestantes con TB (M1.1+ M1.2 )</td>
                                            <td class="n2"><output name="M1_a"></output></td>
                                            <td class="n2"><output name="M1_b"></output></td>
                                            <td class="n2"><output name="M1_c"></output></td>
                                            <td class="n2"><output name="M1_d"></output></td>
                                            <td class="n2"><output name="M1_e"></output></td>
                                            <td class="n2"><output name="M1_f"></output></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>    
                                            <td>M1.1 TB Pulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_53a" id="nu_53a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_53a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_53b" id="nu_53b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_53b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_53c" id="nu_53c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_53c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_53d" id="nu_53d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_53d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_53e" id="nu_53e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_53e; ?>"/></td>
                                            <td><output name="M1_1_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> M1.2 TB Extrapulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_54a" id="nu_54a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_54a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_54b" id="nu_54b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_54b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_54c" id="nu_54c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_54c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_54d" id="nu_54d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_54d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_54e" id="nu_54e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_54e; ?>"/></td>
                                            <td><output name="M1_2_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">N.  PERSONAL DE SALUD DEL EESS. CON TUBERCULOSIS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2">N1. N°de trabajadores del EESS con TB (N1.1+ N1.2)</td>
                                            <td class="n2"><output name="N1_a"></output></td>
                                            <td class="n2"><output name="N1_b"></output></td>
                                            <td class="n2"><output name="N1_c"></output></td>
                                            <td class="n2"><output name="N1_d"></output></td>
                                            <td class="n2"><output name="N1_e"></output></td>
                                            <td class="n2"><output name="N1_f"></output></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>    
                                            <td>N1.1 TB Pulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_55a" id="nu_55a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_55a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_55b" id="nu_55b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_55b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_55c" id="nu_55c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_55c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_55d" id="nu_55d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_55d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_55e" id="nu_55e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_55e; ?>"/></td>
                                            <td><output name="N1_1_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> N1.2 TB Extrapulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_56a" id="nu_56a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_56a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_56b" id="nu_56b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_56b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_56c" id="nu_56c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_56c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_56d" id="nu_56d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_56d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_56e" id="nu_56e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_56e; ?>"/></td>
                                            <td><output name="N1_2_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td class="n2">N2. N° de trabajadores con TB-MDR confirmado</td>
                                            <td class="n2"><input class="text" maxlength="3" type="text" name="nu_57a" id="nu_57a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_57a; ?>"/></td>
                                            <td class="n2"><input class="text" maxlength="3" type="text" name="nu_57b" id="nu_57b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_57b; ?>"/></td>
                                            <td class="n2"><input class="text" maxlength="3" type="text" name="nu_57c" id="nu_57c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_57c; ?>"/></td>
                                            <td class="n2"><input class="text" maxlength="3" type="text" name="nu_57d" id="nu_57d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_57d; ?>"/></td>
                                            <td class="n2"><input class="text" maxlength="3" type="text" name="nu_57e" id="nu_57e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_57e; ?>"/></td>
                                            <td class="n2"><output name="N2_f"></output></td>
                                            <td class="n2"></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">O.  COMORBILIDAD TB/DIABETES</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2"> O1. Total de casos con TB / DIABETES (O1.1+ O1.2 )</td>
                                            <td class="n2"><output name="O1_a"></output></td>
                                            <td class="n2"><output name="O1_b"></output></td>
                                            <td class="n2"><output name="O1_c"></output></td>
                                            <td class="n2"><output name="O1_d"></output></td>
                                            <td class="n2"><output name="O1_e"></output></td>
                                            <td class="n2"><output name="O1_f"></output></td>
                                            <td class="n2"></td>

                                        </tr>
                                        <tr>    
                                            <td>O1.1 TB Pulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_58a" id="nu_58a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_58a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_58b" id="nu_58b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_58b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_58c" id="nu_58c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_58c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_58d" id="nu_58d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_58d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_58e" id="nu_58e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_58e; ?>"/></td>
                                            <td><output name="O1_1_f"></output></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>O1.2 TB Extrapulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_59a" id="nu_59a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_59a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_59b" id="nu_59b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_59b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_59c" id="nu_59c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_59c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_59d" id="nu_59d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_59d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_59e" id="nu_59e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_59e; ?>"/></td>
                                            <td><output name="O1_2_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">P.  TAMIZAJE DE DIABETES EN PACIENTES CON TB</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>P1. Total de casos con TB que cuenten con resultado de glicemia durante el Tto.</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_60a" id="nu_60a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_60a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_60b" id="nu_60b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_60b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_60c" id="nu_60c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_60c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_60d" id="nu_60d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_60d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_60e" id="nu_60e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_60e; ?>"/></td>
                                            <td><output name="P1_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">Q.  FALLECIDOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                        <tr>    
                                            <td>Q1 N° de Pacientes fallecidos durante tratamiento</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_61a" id="nu_61a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_61a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_61b" id="nu_61b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_61b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_61c" id="nu_61c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_61c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_61d" id="nu_61d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_61d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_61e" id="nu_61e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_61e; ?>"/></td>
                                            <td><output name="Q1_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">R.  RAFA</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>R1. N° de pacientes con Reacciones Adversas a Fármacos Antituberculosis</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_62a" id="nu_62a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_62a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_62b" id="nu_62b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_62b; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_62c" id="nu_62c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_62c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_62d" id="nu_62d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_62d; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_62e" id="nu_62e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_62e; ?>"/></td>
                                            <td><output name="R1_f"></output></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                </table> 
                             </div>
                             <div class="content-4">
                              <div class="clear-shadow"></div>
                                <table id="gradient-style_f2" summary="CASOS NUEVOS DE TUBERCULOSIS">
                                    <thead>                
                                        <tr>
                                            <th scope="col"></th>
                                            <th colspan="19" scope="col">GRUPOS DE EDADES SEGÚN SEXO</th>
                                        </tr>                                    
                                        <tr>
                                            <th scope="col">S.  CASOS NUEVOS DE TUBERCULOSIS</th>
                                            <th colspan="2" scope="col">0-4 años</th>
                                            <th colspan="2" scope="col">5-14 años</th>
                                            <th colspan="2" scope="col">15-24 años</th>
                                            <th colspan="2" scope="col">25-34 años</th>
                                            <th colspan="2" scope="col">35-44 años</th>				
                                            <th colspan="2" scope="col">45-54 años</th>
                                            <th colspan="2" scope="col">55-64 años</th>
                                            <th colspan="2" scope="col">65 a más años</th>
                                            <th colspan="3" scope="col">TOTAL</th>

                                        </tr>                        
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>                    
                                    <tbody>
                                        <tr>    
                                            <td class="n2">S1. TB Pulmonar Total (S1.1 +S1.2 + S1.3)</td>
                                            <td class="n2"><output name="S1_a"></output></td>
                                            <td class="n2"><output name="S1_b"></output></td>
                                            <td class="n2"><output name="S1_c"></output></td>
                                            <td class="n2"><output name="S1_d"></output></td>
                                            <td class="n2"><output name="S1_e"></output></td>
                                            <td class="n2"><output name="S1_f"></output></td>                            
                                            <td class="n2"><output name="S1_g"></output></td>
                                            <td class="n2"><output name="S1_h"></output></td>
                                            <td class="n2"><output name="S1_i"></output></td>
                                            <td class="n2"><output name="S1_j"></output></td>
                                            <td class="n2"><output name="S1_k"></output></td>
                                            <td class="n2"><output name="S1_l"></output></td>
                                            <td class="n2"><output name="S1_m"></output></td>
                                            <td class="n2"><output name="S1_n"></output></td>
                                            <td class="n2"><output name="S1_o"></output></td>
                                            <td class="n2"><output name="S1_p"></output></td>
                                            <td class="n2"><output name="S1_q"></output></td>
                                            <td class="n2"><output name="S1_r"></output></td>

                                            <td class="n2"><output name="S1_s"></output></td>

                                        </tr>
                                        <tr>    
                                            <td>S1.1 TB Pulmonar frotis positivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75a" id="nu_75a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75b" id="nu_75b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75b; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75c" id="nu_75c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75d" id="nu_75d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75d; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75e" id="nu_75e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75e; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75f" id="nu_75f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75f; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75g" id="nu_75g"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75g; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75h" id="nu_75h"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75h; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75i" id="nu_75i"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75i; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75j" id="nu_75j"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75j; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75k" id="nu_75k"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75k; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75l" id="nu_75l"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75l; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75m" id="nu_75m"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75m; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75n" id="nu_75n"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75n; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75o" id="nu_75o"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75o; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75p" id="nu_75p"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_75p; ?>"/></td>

                                            <td><output name="S1_1_f_F"></output></td>
                                            <td><output name="S1_1_f_M"></output></td>

                                            <td><output name="S1_1_f_T"></output></td>


                                        </tr>
                                        <tr>    
                                            <td>S1.2 TB Pulmonar frotis negativo cultivo positivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76a" id="nu_76a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76b" id="nu_76b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76b; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76c" id="nu_76c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76d" id="nu_76d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76d; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76e" id="nu_76e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76e; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76f" id="nu_76f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76f; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76g" id="nu_76g"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76g; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76h" id="nu_76h"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76h; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76i" id="nu_76i"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76i; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76j" id="nu_76j"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76j; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76k" id="nu_76k"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76k; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76l" id="nu_76l"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76l; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76m" id="nu_76m"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76m; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76n" id="nu_76n"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76n; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76o" id="nu_76o"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76o; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76p" id="nu_76p"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_76p; ?>"/></td>

                                            <td><output name="S1_2_f_F"></output></td>
                                            <td><output name="S1_2_f_M"></output></td>

                                            <td><output name="S1_2_f_T"></output></td>

                                        </tr>
                                        <tr>    
                                            <td>S1.3 TB Pulmonar frotis negativo cultivo negativo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77a" id="nu_77a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77b" id="nu_77b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77b; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77c" id="nu_77c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77d" id="nu_77d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77d; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77e" id="nu_77e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77e; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77f" id="nu_77f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77f; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77g" id="nu_77g"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77g; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77h" id="nu_77h"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77h; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77i" id="nu_77i"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77i; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77j" id="nu_77j"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77j; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77k" id="nu_77k"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77k; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77l" id="nu_77l"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77l; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77m" id="nu_77m"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77m; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77n" id="nu_77n"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77n; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77o" id="nu_77o"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77o; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77p" id="nu_77p"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_77p; ?>"/></td>

                                            <td><output name="S1_3_f_F"></output></td>
                                            <td><output name="S1_3_f_M"></output></td>

                                            <td><output name="S1_3_f_T"></output></td>

                                        </tr>
                                        <tr>    
                                            <td>S1.4 TB Pulmonar sin frotis de esputo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78a" id="nu_78a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78b" id="nu_78b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78b; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78c" id="nu_78c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78d" id="nu_78d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78d; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78e" id="nu_78e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78e; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78f" id="nu_78f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78f; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78g" id="nu_78g"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78g; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78h" id="nu_78h"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78h; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78i" id="nu_78i"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78i; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78j" id="nu_78j"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78j; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78k" id="nu_78k"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78k; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78l" id="nu_78l"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78l; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78m" id="nu_78m"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78m; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78n" id="nu_78n"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78n; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78o" id="nu_78o"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78o; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78p" id="nu_78p"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_78p; ?>"/></td>

                                            <td><output name="S1_4_f_F"></output></td>
                                            <td><output name="S1_4_f_M"></output></td>

                                            <td><output name="S1_4_f_T"></output></td>

                                        </tr>
                                        <tr>    
                                            <td class="n2">S2. TB Extrapulmonar (B2.1 +B2.2)</td>
                                            <td class="n2"><output name="S2_a"></output></td>
                                            <td class="n2"><output name="S2_b"></output></td>
                                            <td class="n2"><output name="S2_c"></output></td>
                                            <td class="n2"><output name="S2_d"></output></td>
                                            <td class="n2"><output name="S2_e"></output></td>
                                            <td class="n2"><output name="S2_f"></output></td>                            
                                            <td class="n2"><output name="S2_g"></output></td>
                                            <td class="n2"><output name="S2_h"></output></td>
                                            <td class="n2"><output name="S2_i"></output></td>
                                            <td class="n2"><output name="S2_j"></output></td>
                                            <td class="n2"><output name="S2_k"></output></td>
                                            <td class="n2"><output name="S2_l"></output></td>
                                            <td class="n2"><output name="S2_m"></output></td>
                                            <td class="n2"><output name="S2_n"></output></td>
                                            <td class="n2"><output name="S2_o"></output></td>
                                            <td class="n2"><output name="S2_p"></output></td>
                                            <td class="n2"><output name="S2_q"></output></td>
                                            <td class="n2"><output name="S2_r"></output></td>

                                            <td class="n2"><output name="S2_s"></output></td>
                                        </tr>
                                        <tr>    
                                            <td>S2.1 Con confirmación bacteriológica o histopatológica</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79a" id="nu_79a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79b" id="nu_79b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79b; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79c" id="nu_79c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79d" id="nu_79d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79d; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79e" id="nu_79e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79e; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79f" id="nu_79f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79f; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79g" id="nu_79g"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79g; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79h" id="nu_79h"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79h; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79i" id="nu_79i"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79i; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79j" id="nu_79j"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79j; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79k" id="nu_79k"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79k; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79l" id="nu_79l"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79l; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79m" id="nu_79m"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79m; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79n" id="nu_79n"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79n; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79o" id="nu_79o"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79o; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79p" id="nu_79p"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_79p; ?>"/></td>

                                            <td><output name="S2_1_f_F"></output></td>
                                            <td><output name="S2_1_f_M"></output></td>

                                            <td><output name="S2_1_f_T"></output></td>
                                        </tr>
                                        <tr>    
                                            <td>S2.2 Sin confirmación bacteriológica o histopatológica</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_80a" id="nu_80a"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80a; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_80b" id="nu_80b"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80b; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_80c" id="nu_80c"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80c; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_80d" id="nu_80d"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80d; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_80e" id="nu_80e"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80e; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_80f" id="nu_80f"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80f; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_80g" id="nu_80g"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80g; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_80h" id="nu_80h"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80h; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_80i" id="nu_80i"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80i; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_80j" id="nu_80j"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80j; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_80k" id="nu_80k"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80k; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_80l" id="nu_80l"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80l; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_80m" id="nu_80m"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80m; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_80n" id="nu_80n"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80n; ?>"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_80o" id="nu_80o"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80o; ?>"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_80p" id="nu_80p"  onKeypress="return validaNum(event)" value="<?php echo $this->inftbc->nu_80p; ?>"/></td>

                                            <td><output name="S2_2_f_F"></output></td>
                                            <td><output name="S2_2_f_M"></output></td>

                                            <td><output name="S2_2_f_T"></output></td>

                                        </tr>
                                    </tbody>                                    
                                </table>
                             </div>                         
                       </div>
                </section>
        </div>        
                <script type="text/javascript">
                    var options = {
                        script:"index.php?option=com_nutritions&controller=person&task=getEncuestador&",
                        varname:"encuestadorName",
                        json:true,
                        shownoresults:false,
                        maxresults:6,
                        callback: function (obj) { document.getElementById('nu_dni').value = obj.id; }
                    };
                    var as_json = new bsn.AutoSuggest('encuestador', options);
                </script>
                
                <script type="text/javascript">
                    var options_es = {
                        script:"index.php?option=com_nutritions&controller=establec&task=getEstablec&",
                        varname:"establecName",
                        json:true,
                        shownoresults:false,
                        maxresults:6,
                        callback: function (obj) { document.getElementById('cod_2000').value = obj.id; }
                    };
                    var as_json_es = new bsn.AutoSuggest('establec', options_es);
                </script> 
                
    </div>
    
    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->inftbc->id_tbc; ?>" />
    <input type="hidden" name="id_tbc" value="<?php echo $this->inftbc->id_tbc; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="inftbc" />
</form>
